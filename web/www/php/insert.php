<?php 
  include "conDB.php";
  $pname = $_POST['pname'];
  $pdetails = $_POST['pdetails'];
  $pimages = $_POST['pimages'];

  $sql = "INSERT INTO place (pname,pdetails,pimages) VALUES ('$pname','$pdetails','$pimages')";
  
  
  $result = mysqli_query($conn,$sql);

  if(!$result)
  {
    echo 'Not Inserted';
  }
  else
  {
    echo 'Inserted';
  }

  
?>
