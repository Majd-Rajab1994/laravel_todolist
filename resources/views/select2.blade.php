@extends('layout.layout')
@section('content')
    <center>
        <select class="todoop" style="width: 50%;"></select>
    </center>
    <script>
        $(document).ready(function(){

            $(".todoop").select2({
                ajax: {
                    url: '{{ route('homepage.select2.show') }}',
                    //url: 'https://api.github.com/search/repositories',
                    type: "get",
                    dataType: 'json',
                    delay: 250,
                    data: function (params) {
                        return {
                            q: params.term, // search term
                        };
                    },
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(obj) {
                            return {
                                id: obj.id,
                                text: obj.name
                            };
                            })
                        };
                    },
                    cache: true
                },
                placeholder: '-select-',
            });
        });
    </script>
@endsection
