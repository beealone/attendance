<html>
  <head>
    <title>Event Attendance</title>
    <script src="js/jquery-2.1.3.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <style media="screen">
      body > .container {
        padding-top: 30px;
      }
    </style>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>

    <script charset="utf-8">
    $(function () {
      $('#container').highcharts({
        chart: {
          type: 'area'
        },
        title: {
          text: 'US and USSR nuclear stockpiles'
        },
        subtitle: {
          text: 'Source: <a href="http://thebulletin.metapress.com/content/c4120650912x74k7/fulltext.pdf">' +
          'thebulletin.metapress.com</a>'
        },
        xAxis: {
          allowDecimals: false,
          labels: {
            formatter: function () {
              return this.value; // clean, unformatted number for year
            }
          }
        },
        yAxis: {
          title: {
            text: 'Nuclear weapon states'
          },
          labels: {
            formatter: function () {
              return this.value / 1000 + 'k';
            }
          }
        },
        tooltip: {
          pointFormat: '{series.name} produced <b>{point.y:,.0f}</b><br/>warheads in {point.x}'
        },
        plotOptions: {
          area: {
            pointStart: 1940,
            marker: {
              enabled: false,
              symbol: 'circle',
              radius: 2,
              states: {
                hover: {
                  enabled: true
                }
              }
            }
          }
        },
        series: [{
          name: 'USA',
          data: [null, null, null, null, null, 6, 11, 32, 110, 235, 369, 640,
          1005, 1436, 2063, 3057, 4618, 6444, 9822, 15468, 20434, 24126,
          27387, 29459, 31056, 31982, 32040, 31233, 29224, 27342, 26662,
          26956, 27912, 28999, 28965, 27826, 25579, 25722, 24826, 24605,
          24304, 23464, 23708, 24099, 24357, 24237, 24401, 24344, 23586,
          22380, 21004, 17287, 14747, 13076, 12555, 12144, 11009, 10950,
          10871, 10824, 10577, 10527, 10475, 10421, 10358, 10295, 10104]
        }, {
          name: 'USSR/Russia',
          data: [null, null, null, null, null, null, null, null, null, null,
          5, 25, 50, 120, 150, 200, 426, 660, 869, 1060, 1605, 2471, 3322,
          4238, 5221, 6129, 7089, 8339, 9399, 10538, 11643, 13092, 14478,
          15915, 17385, 19055, 21205, 23044, 25393, 27935, 30062, 32049,
          33952, 35804, 37431, 39197, 45000, 43000, 41000, 39000, 37000,
          35000, 33000, 31000, 29000, 27000, 25000, 24000, 23000, 22000,
          21000, 20000, 19000, 18000, 18000, 17000, 16000]
        }]
      });
    });
    </script>

  </head>

  <body>


    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Longwood</a></li>
            <li><a href="#">Mount Dora</a></li>
            <li><a href="#">Oviedo</a></li>
            <li><a href="#">Correctional</a></li>
            <li><a href="#">Online</a></li>
            <li><a href="record/">Record Attendance</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Attendance Tracking System</h1>
      </div>
      <p class="lead">Event Attendance.</p>

      <div class="row">
        <div class="col-xs-12 col-md-12">
          <!-- Chart Data -->
          <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

          <!-- Data Table -->
          <table class="table table-striped">
            <th>Date</th>
            <th>Longwood</th>
            <th>Mount Dora</th>
            <th>Oviedo</th>
            <th>Correctional</th>
            <th>Online</th>
            <tr>
              <td>Saturday</td>
              <td>3000</td>
              <td>0</td>
              <td>0</td>
              <td>200</td>
              <td>3000</td>
            </tr>
            <tr>
              <td>Sunday</td>
              <td>6000</td>
              <td>200</td>
              <td>350</td>
              <td>200</td>
              <td>3000</td>
            </tr>
            <tr>
              <td>Monday</td>
              <td>1000</td>
              <td>0</td>
              <td>0</td>
              <td>200</td>
              <td>3000</td>
            </tr>
          </table>


          <div class="well">
              Northland Attendance System
          </div>
        </div>
      </div>

    </div> <!-- Container -->

  </body>
</html>