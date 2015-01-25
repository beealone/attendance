<html>
  <head>
    <title></title>
  </head>
  <body>


    <?php
    require_once 'meekrodb.2.3.class.php';
    DB::$user = 'root';
    DB::$password = 'root';
    DB::$dbName = 'attendance';

    $results = DB::query("SELECT * FROM attendance.ServiceTimes");


    foreach ($results as $row) {
      echo "<p>Service Time: " . $row['ServiceTime'] . "</p>". PHP_EOL;
    }


    ?>

  </body>
</html>
