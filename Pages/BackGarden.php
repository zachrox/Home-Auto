<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="Style.css">
<meta charset="UTF-8">

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
          width: 500, height: 150,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, <?php
          $servername = "localhost";
          $username = "root";
          $password = "ADMIN";
          $dbname = "8266Data";

          // Create connection
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
          } 

          $sql = "SELECT * FROM 8266Data.TempData ORDER BY id DESC LIMIT 1";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo $row["Temp"];
              }
          } else {
              echo "0 results";
          }
          $conn->close();
          ?>);
          chart.draw(data, options);
        }, 1300);
        setInterval(function() {
          data.setValue(1, 1, 30 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1100);


        setInterval(function() {
          data.setValue(2, 1, 20 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(3, 1, 20 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1200);
      }
</script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Temp', 10],
          ['Humidity', 10],
          ['Soil', 10],
          ['Sun Light', 10]
        ]);

        var options = {
          width: 500, height: 150,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };

        var chart = new google.visualization.Gauge(document.getElementById('chart_div2'));

        chart.draw(data, options);

        setInterval(function() {
          data.setValue(0, 1, 60 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1300);
        setInterval(function() {
          data.setValue(1, 1, 60 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1100);


        setInterval(function() {
          data.setValue(2, 1, 60 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1000);
        setInterval(function() {
          data.setValue(3, 1, 60 + Math.round(10 * Math.random()));
          chart.draw(data, options);
        }, 1200);
      }
</script>

    <head>
        <title>Home Auto</title>
    </Head>
    <body>
        <div id="nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="FrontRoom.php">Front Room</a></li>
                <li><a class="active" href="BackGarden.php">Back Garden</a></li>
                <li><a href="#">Settings</a></li>
            </ul>
        </div>

        <div id="widget_box">
            <p>Herb Garden Sensors</p>
            <div id="chart_div"></div>
            <br>
            <p>Vegetable Garden Sensors</p>
            <div id="chart_div2"></div>
    
        </div>

    </body>
</html>
