<?php 
  include "conDB.php";
    $id = $_POST['id'];
  $pname = $_POST['pname'];
  $pdetails = $_POST['pdetails'];
  $pimages = $_POST['pimages'];

  $sql = "UPDATE place SET pname='$pname',pdetails='$pdetails',pimages='$pimages' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>