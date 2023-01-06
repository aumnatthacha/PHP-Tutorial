<!DOCTYPE html>
<html>
<body>

<h1>การสร้าง (ประกาศ) ตัวแปร PHP</h1>
<h2>ใน PHP ตัวแปรเริ่มต้นด้วย $ เครื่องหมายตามด้วยชื่อของตัวแปร</h2>
<h2>หลังจากการดำเนินการตามคำสั่งด้านบน ตัวแปร $txtจะเก็บค่า
     Hello world!ตัวแปร $xจะเก็บค่า 5และตัวแปร จะ เก็บ$yค่า 10.5</h2>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

<h1><br>ตัวแปรเอาต์พุต</h1>
<h2>คำสั่ง PHP echoมักใช้เพื่อส่งออกข้อมูลไปยังหน้าจอ</h2>
<?php
$txt = "W3Schools.com";
echo "I love $txt! <br>";

echo "I love " . $txt . "!"; //คล้ายกับด้านบน
?>

<h1><br>ตัวอย่างต่อไปนี้จะแสดงผลรวมของตัวแปรสองตัว</h1>
<?php
$x = 5;
$y = 4;
echo $x + $y;

echo "<br><img src='img/v1.jpg'>";
?>

</body>
</html>