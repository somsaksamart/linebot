<?php
  require('connect_db.php');
  $sql_text = "SELECT * FROM catbot WHERE keyword LIKE '%b%'";
  $query = mysqli_query($conn,$sql_text);
  $obj = mysqli_fetch_array($query);
  $numrow = mysqli_numrows($obj);
  while($objresult = mysqli_fetch_assoc($query))
  {
      echo $objresult['answer']."<br>";
  }
  echo $numrow."   ......";
  



?>