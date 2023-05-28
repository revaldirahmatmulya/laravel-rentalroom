<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peminjaman;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Termwind\Components\Dd;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        Session::start();
        Carbon::setLocale('id');
        $sesiId = Session::get('id');

        $kelas = Kelas::where('id', $request->id)->first();
        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $tanggal = Carbon::now()->format('Y-m-d');
        //carbon indonesia time H:i:s
        $jam = Carbon::now()->timezone('Asia/Jakarta')->format('H:i');
        $waktu = Carbon::now()->timezone('Asia/Jakarta');


        return view('room-select-confirm.index', compact('mahasiswa', 'tanggal', 'jam', 'kelas', 'waktu'));
    }


    public function store(Request $request)
    {
        $scriptPath = public_path('script.py');
        $process = new Process(['python', $scriptPath]);
        $process->run();

        // Periksa jika ada kesalahan saat menjalankan skrip
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $kelas = Kelas::where('id', $request->id)->first();
        $kelas->tersedia = 0;
        $meminjam = $mahasiswa->meminjam;
        $mahasiswa->meminjam = $meminjam + 1;
        $data = new Peminjaman();
        $waktu = Carbon::now()->timezone('Asia/Jakarta');
        $data->id_mahasiswa = Session::get('id');
        $data->id_kelas = $request->id;
        $data->waktu_pinjam = $waktu;
        $data->waktu_kembali = "Masih dipinjam";
        $kelas->save();
        $mahasiswa->save();
        $data->save();


        return redirect('/ending')->with('success', 'Peminjaman berhasil ditambahkan');
    }

    public function admin()
    {
        $peminjaman = Peminjaman::all();
        return view('admin.index', compact('peminjaman'));
    }
}