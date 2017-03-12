<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TimeStat - Zaplanuj swoje zadania</title>

    <meta name="description" content="Lista zadań">
    <meta name="author" content="Jarosław Bińczyk!">
    
    <link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet"> 
    <link href="app/css/bootstrap.min.css" rel="stylesheet">
    <link href="app/css/jquery.toolbar.css" rel="stylesheet" />
    <link href="app/css/style.css" rel="stylesheet">
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script src="app/js/jquery.min.js"></script>
    <script src="app/js/bootstrap.min.js"></script>
    <script src="app/js/scripts.js"></script>
    <script src="app/js/jquery.toolbar.js"></script>
    
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Styczeń', 'Sales', 'Expenses'],
          ['Luty',  1000,      400],
          ['Marzec',  1170,      460],
          ['Kwiecień',  660,       1120],
          ['Maj',  1030,      540]
        ]);

        var options = {
          title: 'Twoja wydajność',
          color: 'white',
          legend: 'none',
          backgroundColor: '#272525'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
    
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">