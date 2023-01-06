<?php
echo "<font color='#993300'><h1>PHP สตริง</h1>";
echo "<font color='#CC3300'><h4>สตริงคือลำดับของอักขระ เช่น Hello world!</h4>";
echo "<font color='#CC0066'><h4>ฟังก์ชั่นสตริง PHP
ในบทนี้ เราจะดูฟังก์ชันที่ใช้กันทั่วไปเพื่อจัดการกับสตริง</h4>";
echo "<font color='#CC0066'><h4>strlen() - ส่งกลับความยาวของสตริง
ฟังก์ชัน PHP strlen()คืนค่าความยาวของสตริง</h4><br>";
echo strlen ("Hello world!"); 
echo "<br><img src='img/S1.jpg'>";
// 
echo "<br><font color='#993300'><h1>str_word_count()-นับคำในสตริง</h1>";
echo "<font color='#CC3300'><h4>สฟังก์ชัน PHP str_word_count()นับจำนวนคำในสตริง</h4>";
echo "<br><img src='img/S2.jpg'>";
//
echo "<br><font color='#993300'><h1>strrev()-ย้อนกลับสตริง</h1>";
echo "<font color='#CC3300'><h4>ฟังก์ชัน PHP strrev()ย้อนกลับสตริง</h4>";
echo strrev("Hello world!"); // outputs !dlrow olleH การย้อนกลับโดยใช้ {strrev}
echo "<br><img src='img/S3.jpg'>";
//
echo "<br><font color='#993300'><h1>strpos() - ค้นหาข้อความภายในสตริง</h1>";
echo "<font color='#CC3300'><p>ฟังก์ชัน PHP strpos()ค้นหาข้อความเฉพาะภายในสตริง หากพบการจับคู่
ฟังก์ชันจะส่งกลับตำแหน่งอักขระของการจับคู่แรก หากไม่พบรายการที่ตรงกัน ระบบจะส่งกลับค่า FALSE</p>";
echo "<font color='#CC3300'><p>ค้นหาข้อความ world ในสตริง Hello world!";
echo "<br><img src='img/S4.jpg'>";
//
echo "<br><font color='#993300'><h1>str_replace()-ทนที่ข้อความภายในสตริง</h1>";
echo "<font color='#9CC3300'><p>ฟังก์ชัน PHP str_replace()แทนที่อักขระบางตัวด้วยอักขระอื่นในสตริง</p>";
echo "<font color='#9CC3300'><p>แทนที่ข้อความ world ด้วย Dolly </p>";
echo str_replace("world", "Dolly", "Hello world! <br>");
echo "<img src='img/S5.jpg'>";

//
$url = 'https://youtu.be/K978PwPD8Ws';
echo '<br><center><a href="'.$url.'">อยู่ได้ ได้อยู่ (ineednoone)</a>';
?>