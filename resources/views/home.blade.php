@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="display-charts">

                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<script type="text/javascript">
var analytics=<?php echo $gender;?>;
google.charts.load('current',{'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);
function drawChart()
{
    var data=google.visualization.arrayToDataTable(analytics);
    var options={
        title:'Percenage of gender'};
        var chart=new google.visualization.PieChart(document.getElementById('display-charts'));
        chart.draw(data,options);
    }


</script>