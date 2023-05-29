@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="text-main-menu text-center">
                <h5 class="text-main-1">
                    SELAMAT DATANG
                </h5>
                <h1 class="text-main-2">SISTEM PEMINJAMAN</h1>
                <h2 class="text-main-3">RUANG KELAS & LAB GEDUNG AH</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="btn-main-wrap text-center">
                <button type="button" class="btn btn-light btn-lg btn-main" onclick="createInput()"><b>Scan KTM</b></button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center input-container mt-4">
            <form id="ktm-form" action="{{ url('mahasiswa/check') }}" method="post" class="d-none">
                @csrf
                <div class="mb-3">

                    <input type="text" class="form-control" name="nim" id="exampleInputEmail1"
                        aria-describedby="emailHelp">

                </div>
            </form>
            <button type="submit" class="btn btn-light btn-lg d-none" form="ktm-form"><b>Submit</b></button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 d-flex justify-content-end  " style="padding-right: 40px">
            <a href="{{ url('admin/login') }}" style="margin-top: 40px"><button type="button"
                    class="btn btn-light btn-lg"><b>Admin</b></button></a>
        </div>
    </div>
    <script>
        function createInput() {
            var form = document.getElementById("ktm-form");
            form.classList.toggle("d-none");
        }
    </script>
@endsection
