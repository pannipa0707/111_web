<?php 
    include 'php/conDB.php';
    $id = $_GET['id'];
    
    $result = mysqli_query($conn,"SELECT * FROM place WHERE id ='$id'");
    $row= mysqli_fetch_array($result);
   
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>แก้ไขข้อมูล(ADMIN)</title>
</head>
<body>
    <!-- <form action="/php/insert.php" method="POST">
        NAME: <input type="text" name="pname">
        <br>
        DETAIL: <input type="text" name="pdetails">
        <br>
        IMG: <input type="text" name="pimages">
        <br>
        <input type="submit">
    </form> -->
    
    <form class="w3-container w3-card-4" action="/php/update.php" method="POST">
        <h2 class="w3-text-blue">แก้ไขข้อมูลสถานที่</h2>
            <p>กรุณากรอกข้อมูลให้ครบถ้วน ขอบคุณครับ/ค่ะ <?php echo $row['id']; ?></p>
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>" >
        <p>      
            <label class="w3-text-blue"><b>ชื่อสถานที่</b></label>
            <input class="w3-input w3-border" name="pname" type="text"  value="<?php echo $row['pname']; ?>"></p>
        <p>      
            <label class="w3-text-blue"><b>รายละเอียด</b></label>
            <input class="w3-input w3-border" name="pdetails" type="text" value="<?php echo $row['pdetails']; ?>"></p>
        <p>      
            <label class="w3-text-blue"><b>รูป</b></label>
            <input class="w3-input w3-border" name="pimages" type="text" value="<?php echo $row['pimages']; ?>"></p>
        <p>      
            <input type="submit" name="ยืนยัน">
    </form>
    
</body>
</html>