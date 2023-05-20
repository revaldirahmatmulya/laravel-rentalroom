@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-wrap-kelas text-center" style="margin-top: 10vh">
                <h1 class="mb-4 text-white">Daftar Ruangan yang Dipinjam</h1>
                <h3 class="text-white">Pilih ruang yang akan dikembalikan</h3>
            </div>
        </div>
    </div>
    <div class="row d-flex d-flex align-items-center" style="margin-top: 10vh">
        <div class="col-lg-12 text-center">
            <div class="container kelas-list">
                <div class="row">

                    @foreach ($dipinjam as $e)
                        <div class="col-lg-4">
                            <form action="{{ url('kembalikan/' . $e->kelas->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <button type="submit" class="btn btn-light mb-4" style="width: 300px;height: 50px;"><b>
                                        {{ $e->kelas->nama_kelas }}</b></button>

                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endsection
