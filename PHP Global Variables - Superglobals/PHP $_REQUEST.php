<?php
echo "<center><font color='#993300'><h1>PHP ซุปเปอร์โกลบอล _REQUEST</h1>";
echo "<center><font color='#993300'><h2>ตัวแปร Super global เป็นตัวแปรในตัวที่พร้อมใช้งานเสมอในทุกขอบเขต</h2>";
$x = 75;
$y = 25; 

function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;

//
echo "<br><center><img src='img/GG1.jpg'</br>";

?>