<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<p>ใน PHP คำหลัก (เช่น if, else, while, echo) คลาส ฟังก์ชัน 
    และฟังก์ชันที่ผู้ใช้กำหนดจะไม่คำนึงถึงตัวพิมพ์เล็กและใหญ่ในตัวอย่างด้านล่าง
    ข้อความ echo ทั้งสามด้านล่างมีค่าเท่ากันและถูกกฎหมาย</p>

<?php  
// ใส่สีฟอนต์
echo "<font color='blue'> Hello, 644259007 </font><br>";

echo "Hello World!<br>";
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

<h3>ดูตัวอย่างด้านล่าง เฉพาะคำสั่งแรกเท่านั้นที่จะแสดงค่าของ $colorตัวแปร! 
    นี่เป็นเพราะ $color, $COLOR, และ $coLORถือเป็นตัวแปรที่แตกต่างกันสามตัว:</h3>
    <p>หมายเหตุ:อย่างไรก็ตาม:, ชื่อตัวแปรทั้งหมดคำนึงถึงตัวพิมพ์เล็กและใหญ่!!!</p>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $color . "<br>";
echo "My boat is " . $color . "<br>";

// ใส่รูป
echo "<br><img src='img/1.jpg'>";

?>
</body>
</html> 

<?php
$url = 'https://youtu.be/XPzjSdLsUeI';
echo '<a href="'.$url.'">ILLSLICK - My Sunshine (FIXTAPE 4) + Lyrics</a>';
?>

<!-- http://127.0.0.1/PHP%20Tutorial/ การรันบน XAMPP  -->