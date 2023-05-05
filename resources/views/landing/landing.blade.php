@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-lg-12">
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
            <form id="ktm-form" class="d-none">
                <div class="mb-3">

                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
            </form>
            <button type="submit" class="btn btn-light btn-lg d-none" form="ktm-form"><b>Submit</b></button>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 d-flex justify-content-end ">
            <a href="" style="margin-top: 70px"><button type="button"
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
