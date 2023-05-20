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
            {{-- <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf

                <div>
                    <label for="username">Username</label>
                    <input id="username" type="username" name="username" value="{{ old('username') }}" required autofocus>
                    @error('username')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="password">Password</label>
                    <input id="password" type="password" name="password" required>
                    @error('password')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button type="submit">Login</button>
                </div>
            </form> --}}


            <form action="{{ route('admin.login.submit') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-white fw-bold">Username</label>
                    <input type="username" class="form-control" name="username">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white fw-bold">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10 d-flex justify-content-end ">
            <a href="{{ url('/') }}" style="margin-top: 70px"><button type="button"
                    class="btn btn-light btn-lg"><b>Main Menu</b></button></a>
        </div>
    </div>
@endsection
