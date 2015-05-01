<?php error_reporting(E_ALL ^ E_NOTICE);
  require_once '../db-config.php';

  DB::query("insert into attendance.Locations (Name,Enabled)
    VALUES(%s, True);", $_GET['Location']);

  header("Location: index.php?success=true");
