<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //2 where clause
        $kelas = Kelas::where('nama_kelas', 'like', 'kelas%')->where('tersedia', 1)->get();



        if ($kelas->isEmpty()) {
            return view('ruang-kelas.index', compact('kelas'))->with('error', 'Tidak ada kelas yang tersedia');
        } else {
            return view('ruang-kelas.index', compact('kelas'));
        }
    }

    public function indexLab()
    {

        $lab = Kelas::where('nama_kelas', 'like', 'lab%')->where('tersedia', 1)->get();


        if ($lab->isEmpty()) {
            return view('ruang-lab.index', compact('lab'))->with('error', 'Tidak ada lab yang tersedia');
        } else {
            return view('ruang-lab.index', compact('lab'));
        }
    }

    //function kelas tidak tersedia
    public function kelasDipinjam()
    {
        $dipinjam = Peminjaman::where('id_mahasiswa', 'like', Session::get('id'))->get()->first();
        $idDipinjam = $dipinjam->id_kelas;
        //2 where clause
        $kelas = Kelas::where('nama_kelas', 'like', 'kelas%')->where('id', $idDipinjam)->get();

        if ($kelas->isEmpty()) {
            return view('ruang-kelas.pengembalian', compact('kelas'))->with('error', 'Tidak ada kelas yang tidak tersedia');
        } else {
            return view('ruang-kelas.pengembalian', compact('kelas'));
        }
    }

    public function labDipinjam()
    {
        $dipinjam = Peminjaman::where('id_mahasiswa', 'like', Session::get('id'))->get()->first();
        $idDipinjam = $dipinjam->id_kelas;
        //2 where clause
        $lab = Kelas::where('nama_kelas', 'like', 'lab%')->where('id', $idDipinjam)->get();

        if ($lab->isEmpty()) {
            return view('ruang-lab.pengembalian', compact('lab'))->with('error', 'Tidak ada lab yang tidak tersedia');
        } else {
            return view('ruang-lab.pengembalian', compact('lab'));
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
