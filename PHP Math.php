<?php
echo "<font color='#2F4F4F'><h1>PHP คณิตศาสตร์</h1>";
echo "<font color='MidnightBlue'><p>PHP มีชุดของฟังก์ชันทางคณิตศาสตร์ที่ช่วยให้คุณสามารถทำงานทางคณิตศาสตร์เกี่ยวกับตัวเลขได้</p>";

echo "<font color='#2F4F4F'><h1>ฟังก์ชัน PHP pi()</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันpi()ส่งคืนค่าของ PI</p>";
echo(pi()); // returns 3.1415926535898

//
echo "<font color='#2F4F4F'><h1>ฟังก์ชัน PHP min() และ max()</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันmin()และmax()สามารถใช้เพื่อค้นหาค่าต่ำสุดหรือสูงสุดในรายการอาร์กิวเมนต์</p>";
echo(min(0, 150, 30, 20, -8, -200));  // returns -200
echo(max(0, 150, 30, 20, -8, -200));  // returns 150


//
echo "<font color='#2F4F4F'><h1>ฟังก์ชัน PHP abs()</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันabs()ส่งคืนค่าสัมบูรณ์ (บวก) ของตัวเลข</p>";
echo(abs(-6.7));  // returns 6.7

//
echo "<font color='#2F4F4F'><h1>PHP sqrt() ฟังก์ชัน</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันsqrt()ส่งคืนค่ารากที่สองของตัวเลข</p>";
echo(sqrt(64));  // returns 8

//
echo "<font color='#2F4F4F'><h1>PHP รอบ () ฟังก์ชัน</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันround()ปัดเศษตัวเลขทศนิยมให้เป็นจำนวนเต็มที่ใกล้เคียงที่สุด</p>";
echo(round(0.60));  // returns 1
echo(round(0.49));  // returns 0

//
echo "<font color='#2F4F4F'><h1>ตัวเลขสุ่ม</h1>";
echo "<font color='#2F4F4F'><p>ฟังก์ชันrand()สร้างตัวเลขสุ่ม</p>";
echo(rand());

//
echo "<font color='#2F4F4F'><p>เพื่อให้สามารถควบคุมตัวเลขสุ่มได้มากขึ้น คุณสามารถเพิ่ม พารามิเตอร์ minและmax ที่เป็นทางเลือก 
เพื่อระบุจำนวนเต็มต่ำสุดและจำนวนเต็มสูงสุดที่จะส่งคืน
ตัวอย่างเช่น หากคุณต้องการสุ่มจำนวนเต็มระหว่าง 10 ถึง 100 (รวม) ให้ใช้ rand(10, 100)</p>";
echo(rand(10, 100));

?>