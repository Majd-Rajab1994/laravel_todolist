@extends('layout.layout')

@section('content')
    <div class="container">
        <form action="{{ route('homepage.testmail.sendmail') }}" method="get">
            @csrf
            @method('post')
            <div class="form-group">
                <label class="col-lg-2 col-form-label">TO:</label>
                <input type="text" name="sendto" id="sendto" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">subject:</label>
                <input type="text" name="subject" id="subject" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">title:</label>
                <input type="text" name="title" id="title" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">details:</label>
                <textarea name="details" id="details" class="form-control1" cols="30" rows="10"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="sendmail" class="btn btn-primary">SEND</button>
            </div>
        </form>
    </div>
@endsection
