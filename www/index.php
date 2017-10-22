<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Google Charts</title>

    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var jsonData = $.ajax({
          url: "getData.php",
          dataType: "json",
          async: false
          }).responseText;

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 600, height: 300});
    }

    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
      var jsonData = $.ajax({
          url: "getData.php",
          dataType: "json",
          async: false
          }).responseText;

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.ColumnChart(document.getElementById('chart_div_2'));
      chart.draw(data, {width: 600, height: 300});
    }

    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <table>
      <tr>
        <td id="chart_div"></td>
        <td id="chart_div_2"></td>
      </tr>
    </table>

    <!-- <div id="chart_div"></div>
          <div id="chart_div_2"></div> -->
  </body>
</html>
