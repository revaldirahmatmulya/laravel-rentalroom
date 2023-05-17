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

        $kelas = Kelas::where('id', $sesiId)->first();
        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $tanggal = Carbon::now()->format('Y-m-d');
        //carbon indonesia time H:i:s
        $jam = Carbon::now()->timezone('Asia/Jakarta')->format('H:i');
        $waktu = Carbon::now()->timezone('Asia/Jakarta');


        return view('room-select-confirm.index', compact('mahasiswa', 'tanggal', 'jam', 'kelas', 'waktu'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $kelas = Kelas::where('id', $request->id)->first();
        $kelas->tersedia = 0;
        $mahasiswa->meminjam = 1;
        $data = new Peminjaman();
        $waktu = Carbon::now()->timezone('Asia/Jakarta');
        $data->id_mahasiswa = Session::get('id');
        $data->id_kelas = $request->id;
        $data->waktu_pinjam = $waktu;
        $data->waktu_kembali = "Masih dipinjam";
        $kelas->save();
        $mahasiswa->save();
        $data->save();

        return redirect()->back()->with('success', 'Peminjaman berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function edit(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peminjaman  $peminjaman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Peminjaman $peminjaman)
    {
        //
    }

    //create function pengembalian
    public function pengembalian(Request $request)
    {
        $mahasiswa = Mahasiswa::where('id', Session::get('id'))->first();
        $kelas = Kelas::where('id', $request->id)->first();
        $kelas->tersedia = 1;
        $mahasiswa->meminjam = 0;
        $data = Peminjaman::where('id_mahasiswa', Session::get('id'))->first();
        $dataId = $data->id;
        $waktu = Carbon::now()->timezone('Asia/Jakarta');
        $data->waktu_kembali = $waktu;
        $data->status = "Sudah dikembalikan";
        $kelas->update();
        $mahasiswa->update();
        $data->update();

        return redirect()->back()->with('success', 'Pengembalian berhasil ditambahkan');
    }
}
