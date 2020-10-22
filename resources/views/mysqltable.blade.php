@extends('layout.layout')
@section('content')
    <div class="container">
        <form method="POST" id="form">
            @csrf
            <div class="form-group">
                <label>Enter Name Please:</label>
				<input type="text" name="name" class="form-control" value="">
            </div>
        </form>
        <div class="form-group">
            <button onclick= "save1()" name="adduser" class="btn btn-primary" >insert</button>
        </div>
    </div>
    <div class="container">
        <table class="row mt-3 table table-striped">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">name</th>
                <th scope="col"> OP </th>
            </tr>
            @foreach ($data as $todo)
                <tr>
                    <td>{{ $todo['id'] }}</td>
                    <td><input type="text" id="todoname{{ $todo['id'] }}" value="{{ $todo['name'] }}"></td>
                    <td>
                        <a href="" onclick="update1({{ $todo['id'] }})">edit</a>
                        <a href="" onclick="delete1({{ $todo['id'] }})">delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        function save1() {
            var url1;
            url1 = "{{ route('homepage.mysql.create') }}";
            alert(url1);
            $.ajax({
                type: "post",
                url: url1,
                data: $('#form').serialize(),
                success: function () {
                    location.reload(true);
                },
                error: function(){
                    alert("error");
                }
            });
        }

        function update1(id) {
            var name = document.getElementById("todoname"+id).value;
            var url1 = "{{ route('homepage.mysql.update') }}";
            alert(url1);
            $.ajax({
                type: "post",
                url: url1,
                data: {id1 : id , name1 : name}
                success: function () {
                    location.reload(true);
                },
                error: function(){
                    alert("error");
                }
            });
        }


        function delete1(id) {
            var url1 = "{{ route('homepage.mysql.delete') }}";
            alert(url1);
            $.ajax({
                type: "post",
                url: url1,
                data: {id1 : id }
                success: function () {
                    location.reload(true);
                },
                error: function(){
                    alert("error");
                }
            });
        }
    </script>


@endsection
