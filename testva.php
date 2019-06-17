<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TESTVA</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h1>ใส่ชื่อ</h1><input type="text" name="name" id="name" placeholder="กรอกแต่ตัวอักษร"><br>
        <h1>ใส่เบอโทร</h1><input type="text" name="tel" id="tel" placeholder="กรอกแต่ตัวเลข"><br>
        <h1>Email</h1><input type="text" name="email" id="email" placeholder="กรอกฟอร์มอีเมลให้ถูก"><br>
        <input type="submit" name="ok" value="submit">
    </form>

    <?php
    if( isset( $_POST['ok'] ) ){ 

        $email = $_POST['email'];
        $name = $_POST['name'];
        $tel = $_POST['tel'];

        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Zก-ฮ]*$/",$name)){
            echo 'กรอได้แค่ตัวอักษร';
        }else if (!preg_match('/^[0-9]{10}+$/', $tel)){
            echo 'กรอกได้แค่ตัวเลขไม่เกิน10ตัว'; 
        //ตรวจสอบว่าฟอร์มอีเมลถูกไหม
        }else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo 'กรอกอีเมลไม่ถูกต้อง';
        }
    }
            
        
    ?>
</body>
</html>