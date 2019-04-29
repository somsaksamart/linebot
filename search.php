<?php
  require('connect_db.php');
  $sql = "SELECT * FROM catbot";
  $query = mysqli_query($conn,$sql);
  while($obj = mysqli_fetch_array($query))
  {
    echo '11111';
  }
?>