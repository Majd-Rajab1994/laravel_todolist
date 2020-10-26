@extends('layout.layout')
@section('content')
<table id="example" class="display" style="width:100%">
    <thead>
        <tr>
            <th>Name</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Name</th>
        </tr>
    </tfoot>
</table>
<div class="container">
    <form action="" method="post" id ="form">
        @csrf
        <div class="form-group">
            <label>Enter Name Please:</label>
            <input type="text" name="name1" class="form-control" value="">
        </div>
    </form>
    <button onclick="save1()" class="button-info SaveButton" >insert</button>
</div>
<script>
    $(document).ready(function() {
        $('#example').DataTable( {
            "ajax": "{{ route('homepage.apiform.show') }}",
            "columns" : [
                {"data" :"name"}
            ]
        } );
    } );
    function save1()
    {
        var url1;
        url1 = "{{ route('homepage.apiform.craete') }}";
        //alert($('#form').serialize());
        $.ajax({
            type: "post",
            url: url1,
            data: $('#form').serialize(),
            success: function(){
                //$('#userTable').html();
                location.reload(true);
            }
        });
    }
</script>
@endsection
