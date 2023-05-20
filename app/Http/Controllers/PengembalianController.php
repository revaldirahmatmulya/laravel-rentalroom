<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;


class PengembalianController extends Controller
{
    public function pengembalian(Request $request)
    {
        Session::start();
        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $kelas = Kelas::where('id', $request->id)->first();
        //get data peminjaman by id mahasiswa and by id kelas
        $kembali = Peminjaman::where('id_mahasiswa', Session::get('id'))->where('id_kelas', $request->id)->first();
        $waktu = Carbon::now()->timezone('Asia/Jakarta');
        $kelasdipinjam = $mahasiswa->meminjam;
        $kelas['tersedia'] = 1;
        $mahasiswa['meminjam'] = $kelasdipinjam - 1;
        $kembali['waktu_kembali'] = $waktu;
        $kembali['status'] = "Sudah dikembalikan";
        $kelas->update();
        $mahasiswa->update();
        $kembali->update();
        Session::flush();
        return redirect('/ending')->with('success', 'Pengembalian berhasil ditambahkan');
    }
    public function dipinjam()
    {
        Session::start();
        $dipinjam = Peminjaman::where('id_mahasiswa', Session::get('id'))->where('status', 'sedang dipinjam')->get();
        //$dipinjam = Peminjaman::all();
        return view('pengembalian.index', compact('dipinjam'));
    }
}