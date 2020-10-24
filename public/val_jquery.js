$().ready(function () {
    $("#signupform").validate({
        rules: {
            name : {
                required : true,
                minlength : 2
            },
            username : {
                required : true,
                minlength : 2
            },
            password : {
                required : true,
                minlength : 2
            },
            cpassword : {
                required : true,
                minlength : 2,
                equalTo : "#password"
            },
            email : {
                required : true,
                email : true,
            }
        },
        messages : {
            name : {
                required : "please enter your name",
                minlength : "pleasr enter more thn 2 char"
            },
            username : {
                required : "please enter your username",
                minlength : "pleasr enter more thn 2 char"
            },
            password : {
                required : "please enter your password",
                minlength : "pleasr enter more thn 2 char"
            },
            cpassword : {
                required : "please enter your password",
                minlength : "pleasr enter more thn 2 char",
                equalTo: "please enter the same password"
            },
            email : {
                required : "please enter your email",
            }
        }
    }
    )
});
