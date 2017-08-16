<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Style.css">
    <meta charset="UTF-8">

<script type="text/javascript" src="gauge.js"></script>
   <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Temp', 0],
          ['Humidity', 0],
          ['Soil', 0],
          ['Sun Light', 0]
        ]);

        var options = {
          width: 400, height: 120,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(1, 1, 40 + Math.round(60 * Math.random()));
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(2, 1, 60 + Math.round(20 * Math.random()));
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(3, 1, Math.round(60));
          chart.draw(data, options);
        }, 1000);
      }
</script>

    <head>
        <title>Home Auto</title>
    </Head>
    <body>
        <div id="nav">
            <ul>
                <li><a href="Main.php">Home</a></li>
                <li><a class="active" href="BackGarden.php">Back Garden</a></li>
                <li><a href="#">Front Room</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

        <div id="widget_box">
            <p>Herb Garden Sensors</p>
            <div id="chart_div" style="position: relative; display: inline-block; width: 400px; height: 120px;"></div>

    
        </div>

    </body>
</html>
