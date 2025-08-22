@extends('admin.auth.layout')

@section('title', 'Login Admin')

@section('content')
<h2>Login Admin</h2>
<form method="POST" action="{{ route('admin.login.submit') }}">
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
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required autofocus>
    </div>

    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password" required>
    </div>

    <button type="submit" class="btn btn-primary w-100">Login</button>
    <p class="text-center mt-3">
        Belum punya akun? <a href="{{ route('admin.register') }}">Daftar</a>
    </p>
</form>
@endsection
