<?php
echo "<center><font color='#993300'><h1>อาร์เรย์ที่จัดทำดัชนี PHP</h1>";
echo "<center><font color='#993300'><h2>อาร์เรย์ที่จัดทำดัชนี PHP</h2>";
echo "<center><font color='#CC3300'><h4>ตัวอย่างต่อไปนี้สร้างอาร์เรย์ที่มีดัชนีชื่อ cars กำหนดองค์ประกอบสามรายการให้ แล้วพิมพ์ข้อความที่มีค่าอาร์เรย์:</h4>";
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
//
echo "<center><font color='#993300'><h1>วนซ้ำผ่านอาร์เรย์ที่จัดทำดัชนี</h1>";
echo "<center><font color='#CC3300'><h4>ในการวนซ้ำและพิมพ์ค่าทั้งหมดของอาร์เรย์ที่จัดทำดัชนี คุณสามารถใช้การforวนซ้ำได้ดังนี้</h4>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

//
echo "<br><center><img src='img/IA1.jpg'\" width=\"750\" height=\"400\"><br>";

?>