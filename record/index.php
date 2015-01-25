<?php
  require_once '../meekrodb.2.3.class.php';
  DB::$user = 'root';
  DB::$password = 'root';
  DB::$dbName = 'attendance';
?>

<html>
  <head>
    <title>Record Numbers</title>
    <script src="../js/jquery-2.1.3.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <style media="screen">
    body > .container {
      padding-top: 30px;
    }
    </style>


  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">Home</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="#">Longwood</a></li>
            <li><a href="#">Mount Dora</a></li>
            <li><a href="#">Oviedo</a></li>
            <li><a href="#">Correctional</a></li>
            <li><a href="#">Online</a></li>
            <li class="active"><a href="#">Record Attendance</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!-- Begin page content -->
    <div class="container">
      <div class="page-header">
        <h1>Attendance Tracking System</h1>
      </div>
      <p class="lead">Record Attendance.</p>

      <div class="row">
        <div class="col-xs-12 col-md-12">

          <form>
            <div class="row">

          <div class="col-xs-12 col-md-8">
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">Service Date</span>
                <input type="text" class="form-control" placeholder="1/1/2015" aria-describedby="basic-addon1">
              </div>
            </div>

            <div class="form-group">
              <select class="form-control">
               <option>Choose Service Time</option>
              <?php
                  $servicetimes = DB::query("select * from attendance.servicetimes;");
                  foreach ($servicetimes as $row) {
                    echo "<option>" . $row['ServiceTime'] . "</options>" .PHP_EOL;
                  }
              ?>
              </select>
            </div>

            <div class="form-group">
              <select class="form-control">
              <option>Choose Service Location</option>
              <?php
                  $servicetimes = DB::query("select * from attendance.locations;");
                  foreach ($servicetimes as $row) {
                    echo "<option>" . $row['Name'] . "</options>" .PHP_EOL;
                  }
              ?>
              </select>
            </div>

            <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">Number of Adults</span>
              <input type="text" class="form-control" placeholder="0" aria-describedby="basic-addon2">
            </div>
          </div>

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon3">Number of Children</span>
              <input type="text" class="form-control" placeholder="0" aria-describedby="basic-addon3">
            </div>
          </div>
        </div>
      </div>
          <button type="submit" class="btn btn-default">Submit</button>
          </form>

          </div>









        </div>
      </div>

    </div> <!-- Container -->

  </body>
</html>
