<?php
echo "<font color='NavyBlue'><h1>ค่าคงที่ PHP PHP Constants</h1>";
echo "<font color='MediumBlue'><p>ค่าคงที่คือตัวระบุ (ชื่อ) สำหรับค่าอย่างง่าย ไม่สามารถเปลี่ยนค่าระหว่างสคริปต์ได้</p>";
echo "<font color='MediumBlue'><p>ชื่อค่าคงที่ที่ถูกต้องจะขึ้นต้นด้วยตัวอักษรหรือเครื่องหมายขีดล่าง (ไม่มีเครื่องหมาย $ นำหน้าชื่อค่าคงที่)</p>";
echo "<font color='MediumBlue'><p>หมายเหตุ:ไม่เหมือนกับตัวแปร ค่าคงที่จะถูกรวมโดยอัตโนมัติทั่วทั้งสคริปต์</p>";

echo "<font color='NavyBlue'><h1>สร้างค่าคงที่ด้วย ชื่อที่คำนึงถึงตัว พิมพ์เล็กและใหญ่</h1>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

echo "<font color='NavyBlue'><h1>สร้างค่าคงที่ด้วย ชื่อ ที่ไม่คำนึงถึงตัวพิมพ์เล็กและใหญ่</h1>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;

echo "<font color='NavyBlue'><h1>PHP อาร์เรย์คงที่</h1>";
echo "<font color='NavyBlue'><p>ใน PHP7 คุณสามารถสร้างค่าคงที่ Array ได้โดยใช้define()ฟังก์ชัน</p>";
  define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];

  echo "<font color='NavyBlue'><p>ใน PHP7 คุณสามารถสร้างค่าคงที่ Array ได้โดยใช้define()ฟังก์ชัน</p>";
  echo "<br><img src='img/CO1.jpg'>";
?>

