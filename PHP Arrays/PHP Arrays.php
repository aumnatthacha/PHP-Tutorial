<?php
echo "<center><font color='#993300'><h1>PHP อาร์เรย์</h1>";
echo "<center><font color='#CC3300'><h4>อาร์เรย์เก็บค่าหลายค่าไว้ในตัวแปรเดียว</h4>";

$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

//
echo "<center><font color='#993300'><h1>รับความยาวของอาร์เรย์ - ฟังก์ชัน count()</h1>";
echo "<center><font color='#CC3300'><h4>ฟังก์ชันcount()นี้ใช้เพื่อส่งคืนความยาว (จำนวนองค์ประกอบ) ของอาร์เรย์</h4>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

//
echo "<br><center><img src='img/A1.jpg'\" width=\"750\" height=\"400\"><br>";
echo "<br><img src='img/A2.jpg'>";

?>