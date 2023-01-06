<!DOCTYPE html>
<html>
<head>
<style>
.color{
	color: #330099;
}
div.a {
	text-align: center;
}
</style>
</head>
<body>
    <div class = "a">
    <!--ใส่สี   .color เป็นค่าตัวแปล-->
    <h1 class = "color">PHP นิพจน์ทั่วไป</h1>
    <h3 class = "color">Regular Expression คืออะไร?</h3>
    <p>นิพจน์ทั่วไปคือลำดับของอักขระที่สร้างรูปแบบการค้นหา เมื่อคุณค้นหาข้อมูลในข้อความ <br> คุณสามารถใช้รูปแบบการค้นหานี้เพื่ออธิบายสิ่งที่คุณกำลังค้นหา 
        <br> นิพจน์ทั่วไปสามารถเป็นอักขระตัวเดียวหรือเป็นรูปแบบที่ซับซ้อนกว่าก็ได้ <br> สามารถใช้นิพจน์ทั่วไปในการดำเนินการค้นหาข้อความและแทนที่ข้อความได้ทุกประเภท



</p>
</form>
</div>
<div class = "a"><h4 class = "color">ใช้ preg_match() <br>
ฟังก์ชันpreg_match()จะบอกคุณว่าสตริงมีรูปแบบที่ตรงกันหรือไม่ <br> 
ใช้นิพจน์ทั่วไปเพื่อค้นหา "w3schools" โดยไม่คำนึงถึงตัวพิมพ์เล็กและใหญ่ในสตริง</h4></div>
<?php
echo "<center><font color='#993300'>"; //สีตัวผลลัพธ์
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
?>

<div class = "a"><h4 class = "color">การใช้ preg_match_all()<br>
ฟังก์ชันpreg_match_all()จะบอกคุณว่าพบการจับคู่รูปแบบในสตริงกี่รายการ<br> 
ใช้นิพจน์ทั่วไปเพื่อนับจำนวนการเกิดขึ้นของ "ain" ในสตริงโดยไม่คำนึงถึงขนาดตัวพิมพ์</h4></div>
<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str);
?>


<div class = "a"><h4 class = "color">การใช้ preg_replace()<br>
ฟังก์ชันpreg_replace()จะแทนที่การจับคู่ทั้งหมดของรูปแบบในสตริงด้วยสตริงอื่น<br> 
ใช้นิพจน์ทั่วไปที่ไม่คำนึงถึงขนาดตัวพิมพ์เพื่อแทนที่ Microsoft ด้วย W3Schools ในสตริง</h4></div>
<?php
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>


<div class = "a"><h4 class = "color">การจัดกลุ่ม<br>
คุณสามารถใช้วงเล็บ( )เพื่อใช้ปริมาณกับรูปแบบทั้งหมด นอกจากนี้ยังสามารถใช้เพื่อเลือกส่วนของรูปแบบที่จะใช้เป็นคู่<br> 
ใช้การจัดกลุ่มเพื่อค้นหาคำว่า "banana" โดยมองหาbaตามด้วยna สองตัวอย่าง </h4></div>
<?php
$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
?>
</body>
</html>