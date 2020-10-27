@extends('layout.layout')

@section('content')
<form action="{{ route('homepage.storage.save') }}" method="POST">
    <div>
        <label for="photo">file: </label>
        <input type="file" name="photo" id="photo" class="btn btn-primary">
    </div>
    <button type="submit">Upload</button>
    {{ csrf_field() }}
</form>
@endsection
