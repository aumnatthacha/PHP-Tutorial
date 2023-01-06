<?php
echo "<font color='#993300'><h1>PHP สำหรับลูป</h1>";
echo "<font color='#993300'><p>forลูป - วนซ้ำบล็อกโค้ดตามจำนวนครั้งที่กำหนด</p>";
echo "<font color='#993300'><p>การforวนซ้ำจะใช้เมื่อคุณทราบล่วงหน้าว่าควรรันสคริปต์กี่ครั้ง</p>";
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }

  //

  echo "<br><img src='img/FL1.jpg'>";
  echo "<font color='#993300'><p>ตัวอย่างนี้นับเป็น 100 คูณสิบ</p>";
  for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
  }

?>

