<!DOCTYPE html>
<html>
 <head>
  <title>Lorem Ipsum</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <style type="text/css">
   .box{
    width:800px;
    margin:0 auto;
   }
  </style>
  <script type="text/javascript">
      
      var visitor = <?php echo $visitor; ?>;
      

      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      
      function drawChart() {
        var data = google.visualization.arrayToDataTable(visitor);
        var options = {
          title: 'AVG Call statistics',
          curveType: 'function',
          legend: { position: 'bottom' },
          crosshair: { trigger: 'both' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('linechart'));
        chart.draw(data, options);
      }
    </script>
</head>
 <body>
  <br />
  <div class="container">
   <h3 align="center">Lorem Ipsum</h3><br />
   
   <div class="panel panel-default">
    <div class="panel-heading">
     <h3 class="panel-title">Lorem Ipsum</h3>
    </div>
    <div class="panel-body" align="center">
     <div id="linechart" style="width:1050px; height:450px;">

     </div>
    </div>
   </div>
   
  </div>
 </body>
</html>