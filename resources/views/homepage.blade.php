@extends('layout.layout')
@section('content')
    <div class="container">
        <div>
            <a href="{{ route('homepage.mysql') }}"> mysql table with insert update and delete</a>
        </div>
        <div>
            <a href="{{ route('homepage.select2') }}"> select2</a>
        </div>
        <div>
            <a href="{{ route('homepage.scroll') }}"> scroll</a>
        </div>
        <div>
            <a href="{{ route('homepage.datatable') }}"> Datatable</a>
        </div>
        <div>
            <a href="{{ route('homepage.apiform') }}"> api Datatable</a>
        </div>
        <div>
            <a href="{{ route('homepage.charts') }}"> charts</a>
        </div>
        <div>
            <a href="{{ route('homepage.testmail') }}">send mail</a>
        </div>
        <div>
            <a href="{{ route('homepage.storage') }}">storage</a>
        </div>
    </div>
@endsection
