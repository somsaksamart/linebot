<?php
  $host = 'us-cdbr-gcp-east-01.cleardb.net';
  $user = 'bef8bef2ef12e0';
  $pass = '7ad0b8e4';
   $db = 'gcp_51ac2d698fb071e43c4f';
   $conn = new mysqli($host,$user,$pass,$db);
   mysqli_query($conn,"SET NAMES utf8");
   
?>