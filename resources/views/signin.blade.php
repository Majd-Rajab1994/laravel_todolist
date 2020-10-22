@extends('layout.layout')
@section('content')
    <div class="container">
        <div>
            <p>{{ session('simsg') }}</p>
        </div>
        <form action="{{ route('user.check') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="col-lg-2 col-form-label">name:</label>
                <input type="text" name="username" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">password:</label>
                <input type="password" name="password" value="" class="form-control1">
            </div>
            <div class="form-group">
                <button type="submit" name="signin" class="btn btn-primary">Signin</button>
            </div>
        </form>
    <a href="{{ route('user.signup') }}">Signup user</a>
    </div>
@endsection
