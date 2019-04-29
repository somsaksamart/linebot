<?php
  require('connect_db.php');
  $sql_text ="SELECT * FROM catbot WHERE keyword LIKE 'a'";
  $query = mysqli_query($conn,$sql_text);
  while($objresult = mysqli_fetch_assoc($query))
  {
      echo $objresult['answer']."<br>";
  }



?>