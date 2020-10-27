@extends('layout.layout')
@section('content')
    <div class="container">
        <div>
            <p>{{ session('sumsg') }}</p>
        </div>
        <form action="{{ route("user.signup.create") }}" method="post" id="signupform">
            @csrf
            <div class="form-group">
                <label class="col-lg-2 col-form-label">name:</label>
                <input type="text" name="name" id="name" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">username:</label>
                <input type="text" name="username" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">password:</label>
                <input type="password" name="password" value="" id="password" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">confirm password:</label>
                <input type="password" name="cpassword" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">email:</label>
                <input type="email" name="email" value="" class="form-control1">
            </div>
            <div class="form-group">
                <label class="col-lg-2 col-form-label">captcha:</label>
                <div class="captcha">
                    <span> {!! captcha_img() !!} </span>
                    <button type="button" class="btn btn-primary btn-refresh">refresh</button>
                </div>
                <input type="text" name="captcha" id="captcha" class="form-control1">
            </div>
            <div class="form-group">
                <button type="submit" name="adduser" class="btn btn-primary">SAVE</button>
            </div>
        </form>
    </div>
    <script>
        $(".btn-refresh").click(function(){
            $.ajax({
                type: "get",
                url: "{{ route('captcha.refresh') }}",
                success: function (data) {
                    //alert("dd");
                    $(".captcha span").html(data.captch);
                }
            });
        })
    </script>
@endsection
