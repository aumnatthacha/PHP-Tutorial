<?php
    echo "<font color='blue'><h1>ประเภทข้อมูล PHP</h1>";
    echo "<font color='#FF6666'><h4>ตัวแปรสามารถจัดเก็บข้อมูลประเภทต่างๆ และข้อมูลประเภทต่างๆ สามารถทำสิ่งต่างๆ
    ได้แตกต่างกัน PHP รองรับประเภทข้อมูลต่อไปนี้</h4>
    <h4>สตริง String<br>
    จำนวนเต็ม Integer<br>
    Float (เลขทศนิยม - เรียกอีกอย่างว่า double) Float (floating point numbers - also called double)<br>
    บูลีน Boolean<br>
    อาร์เรย์ Array<br>
    วัตถุ Object<br>
    โมฆะ NULL<br>
    ทรัพยากร Resource</h4>
 </font><br></h1>";


 echo "<font color='blue'><h1>PHP สตริง</h1>";
 echo "<font color='#CC9900'><h4>สตริงคือลำดับของอักขระ เช่น Hello world!
 สตริงสามารถเป็นข้อความใดก็ได้ภายในเครื่องหมายคำพูด คุณสามารถใช้คำพูดเดี่ยวหรือคู่</h4>";

$x = "Hello world!";
$y = 'Hello world!';
echo $x;
echo "<br>"; //การเว้นบรรทัด
echo $y;

echo "<font color='#330000'><h1>PHP จำนวนเต็ม</h1>";
$x = "ชนิดข้อมูลจำนวนเต็มคือตัวเลขที่ไม่ใช่ทศนิยมระหว่าง -2,147,483,648 ถึง 2,147,483,647";
$y = 'กฎสำหรับจำนวนเต็ม';
$a = "จำนวนเต็มต้องมีอย่างน้อยหนึ่งหลัก";
$b = 'จำนวนเต็มต้องไม่มีจุดทศนิยม';
$c = "จำนวนเต็มสามารถเป็นค่าบวกหรือค่าลบก็ได้";
$d = "สามารถระบุจำนวนเต็มในรูปแบบ: เลขฐานสิบ (ฐาน 10), เลขฐานสิบหก (ฐาน 16), ฐานแปด (ฐาน 8) หรือเลขฐานสอง (ฐาน 2)";

echo $x;
echo "<br>"; //การเว้นบรรทัด
echo $y;
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $c;
echo "<br>";
echo $d;

echo "<font color='#330000'><h4>ในตัวอย่างต่อไปนี้ $x เป็นจำนวนเต็ม ฟังก์ชัน PHP var_dump()
ส่งคืนประเภทข้อมูลและค่า</h4>";
$x = 5985;
var_dump($x);
echo "<br><img src='img/DT1.jpg'>";

echo "<br><font color='	#330066'><h1>PHP ลอย</h1>";
echo "<font color='	#330066'><h4>ทศนิยม (เลขทศนิยม) คือตัวเลขที่มีจุดทศนิยมหรือตัวเลขในรูปแบบเลขชี้กำลัง
ในตัวอย่างต่อไปนี้ $x เป็นทศนิยม ฟังก์ชัน PHP var_dump() ส่งคืนประเภทข้อมูลและค่า</h4>";
$x = 10.365;
var_dump($x);
echo "<br><img src='img/DT2.jpg'>";

echo "<br><img src='img/DT3.jpg'>";
echo "<br><img src='img/DT5.jpg'>";

echo "<br><img src='img/DT4.jpg'>";
echo "<br><img src='img/DT6.jpg'>";
?>




