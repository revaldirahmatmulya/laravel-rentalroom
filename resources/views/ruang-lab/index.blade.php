@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-wrap-kelas text-center" style="margin-top: 10vh">
                <h1 class="mb-4 text-white">Ruang Lab</h1>
                <h3 class="text-white">Pilih ruang yang akan dipinjam</h3>
            </div>
        </div>
    </div>
    <div class="row d-flex d-flex align-items-center" style="margin-top: 10vh">
        <div class="col-lg-12 text-center">
            <div class="container kelas-list">
                <div class="row">
                    @foreach ($lab as $e)
                        <div class="col-lg-4">
                            <button type="button" class="btn btn-light  mb-4" style="width: 300px;height: 50px;"><b>Pinjam
                                    {{ $e->nama_kelas }}</b></button>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>
@endsection
