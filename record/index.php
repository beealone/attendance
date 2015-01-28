<?php
  include('../db-config.php');
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
      <p class="lead">Record Attendance - BLAH BLAH BLAH</p>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
        id est laborum.
      </p>

      <div class="row">
        <div class="col-xs-12 col-md-7">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Enter Attendance Data</h3>
            </div>
            <div class="panel-body">

              <form>
                <div class="row">
                  <div class="col-xs-12 col-md-12">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1">Service Date</span>
                        <input type="text" class="form-control" placeholder="e.g., 1/1/2015" aria-describedby="basic-addon1">
                      </div>
                    </div>

                    <div class="form-group">
                      <select class="form-control">
                        <option>Choose Service Time</option>
                        <?php
                        $servicetimes = DB::query("select * from attendance.servicetimes;");
                        foreach ($servicetimes as $row) {
                          echo "<option>" . $row['ServiceTime'] . "</options>" . PHP_EOL;
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
                          echo "<option>" . $row['Name'] . "</options>" . PHP_EOL;
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
        <div class="col-xs-12 col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Add Service Location</h3>
            </div>
            <div class="panel-body">
            <form>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Name of Location</span>
                  <input type="text" class="form-control" placeholder="e.g., City Name" aria-describedby="basic-addon1">
                </div>
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Add Service Time</h3>
            </div>
            <div class="panel-body">
              <form>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon" id="basic-addon1">Name of Service Time</span>
                    <input type="text" class="form-control" placeholder="e.g., Wed, 7PM or Christmas 2015" aria-describedby="basic-addon1">
                  </div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    </div> <!-- Container -->

  </body>
</html>
