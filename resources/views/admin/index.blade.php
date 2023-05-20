@extends('landing.home')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="text-main-menu text-center">
                <h5 class="text-main-1">
                    ADMIN AREA
                </h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center input-container mt-4">
            <div class="table-card">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Ruangan</th>
                            <th scope="col">Tanggal Peminjaman</th>
                            <th scope="col">Tanggal Pengembalian</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($peminjaman as $data)
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->mahasiswa->nama }}</td>
                                <td>{{ $data->mahasiswa->jurusan }}</td>
                                <td>{{ $data->kelas->nama_kelas }}</td>
                                <td>{{ $data->waktu_pinjam }}</td>
                                <td>{{ $data->waktu_kembali }}</td>
                                <td>{{ $data->status }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 d-flex justify-content-end ">
            <form action="{{ route('admin.logout') }}" method="post">
                @csrf
                <button type="submit" class="btn btn-light btn-lg" style="margin-top: 70px"><b>Log Out</b></button>
            </form>

        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endsection
