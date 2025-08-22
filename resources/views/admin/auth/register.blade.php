@extends('admin.auth.layout')

@section('title', 'Register Admin')

@section('content')
<h2>Register Admin</h2>
<form method="POST" action="{{ route('admin.register.submit') }}">
    @csrf

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
    </div>

    <button type="submit" class="btn btn-success w-100">Register</button>
    <p class="text-center mt-3">
        Sudah punya akun? <a href="{{ route('admin.login') }}">Login</a>
    </p>
</form>
@endsection
