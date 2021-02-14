<?php 
  include "conDB.php";
 $id = $_GET['id'];

  $sql = "DELETE FROM place WHERE id='$id'";
  
  
  $result = mysqli_query($conn,$sql);

  if(!$result)
  {
    echo 'Not Delete';
  }
  else
  {
    echo 'Delete Complete';
  }

  
?>