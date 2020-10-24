@extends('layout.layout')

@section('content')
    <div id="chart_div"></div>
    <script>
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'do');
        data.addColumn('number', 'per');
        data.addRows([
            @foreach ($data as $do)
                ['{{ $do['name'] }}',{{ $do['per'] }}],
            @endforeach
        ]);

        var options = {'title':'How Much Pizza I Ate Last Night',
                        'width':400,
                        'height':300};

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        }
    </script>
@endsection
