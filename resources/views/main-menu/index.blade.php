@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-lg-7 d-flex justify-content-center">
            <div class="img-wrap " style="margin-top: 10vh">
                <img src="{{ asset('image/poltek-logo.png') }}" style="width: 500px"alt="">
            </div>

        </div>
        <div class="col-lg-5 d-flex justify-content-center align-items-center">
            <div class="menu-wrap mx-auto text-center">
                <h1 class="text-white">{{ $mahasiswa->nama }}</h1>
                <h3 class="text-white mb-4">{{ $mahasiswa->nim }}</h3>
                <div class="menu-list d-flex flex-column justify-content-around">

                    <a href={{ url('ruang-kelas') }} class="btn btn-light  mb-4"
                        style="width: 300px;height: 50px;"><b>Pinjam
                            Ruang
                            Kelas</b></button></a>
                    <a href={{ url('ruang-lab/') }}><button type="button" class="btn btn-light  mb-4"
                            style="width: 300px;height: 50px;"><b>Pinjam
                                Ruang Lab</b></button></a>
                    <a href=""><button type="button" class="btn btn-light  mb-4"
                            style="width: 300px;height: 50px;"><b>Kembalikan
                                Ruang Kelas</b></button></a>
                    <a href=""><button type="button" class="btn btn-light  mb-4"
                            style="width: 300px;height: 50px;"><b>Kembalikan
                                Ruang Lab</b></button></a>
                </div>
            </div>

        </div>
    </div>
@endsection
