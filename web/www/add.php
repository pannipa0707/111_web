<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>เพิ่มข้อมูล(ADMIN)</title>
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
    
    <form class="w3-container w3-card-4" action="/php/insert.php" method="POST">
        <h2 class="w3-text-blue">เพิ่มข้อมูลสถานที่</h2>
            <p>กรุณากรอกข้อมูลให้ครบถ้วน ขอบคุณครับ/ค่ะ</p>
        <p>      
            <label class="w3-text-blue"><b>ชื่อสถานที่</b></label>
            <input class="w3-input w3-border" name="pname" type="text"></p>
        <p>      
            <label class="w3-text-blue"><b>รายละเอียด</b></label>
            <input class="w3-input w3-border" name="pdetails" type="text"></p>
        <p>      
            <label class="w3-text-blue"><b>รูป</b></label>
            <input class="w3-input w3-border" name="pimages" type="text"></p>
        <p>      
            <input type="submit" name="ยืนยัน">
    </form>
    
</body>
</html>