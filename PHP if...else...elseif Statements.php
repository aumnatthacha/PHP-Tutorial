<?php
echo "<font color='#993300'><h1>PHP - คำสั่ง if</h1>";
echo "<font color='#993300'><p>คำifสั่งดำเนินการรหัสบางส่วนหากเงื่อนไขหนึ่งเป็นจริง</p>";
echo "<font color='#993300'><p>ผลลัพธ์ ขอให้เป็นวันที่ดี! หากเวลาปัจจุบัน (ชั่วโมง) น้อยกว่า 20</p>";
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
}

//
echo "<font color='#993300'><h1>PHP - คำสั่ง if...else</h1>";
echo "<font color='#993300'><p>คำif...elseสั่งดำเนินการรหัสบางอย่างถ้าเงื่อนไขเป็นจริงและรหัสอื่นถ้าเงื่อนไขนั้นเป็นเท็จ</p>";
echo "<font color='#993300'><p>ผลลัพธ์ ขอให้เป็นวันที่ดี! หากเวลาปัจจุบันน้อยกว่า 20 และ นอนหลับฝันดี! มิฉะนั้น</p>";
$t = date("H");
if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

//
echo "<font color='#993300'><h1>PHP - คำสั่ง if...elseif...else</h1>";
echo "<font color='#993300'><p>คำif...elseif...elseสั่งดำเนินการรหัสที่แตกต่างกันสำหรับมากกว่าสองเงื่อนไข</p>";
echo "<font color='#993300'><p>ผลลัพธ์ สวัสดีตอนเช้า! หากเวลาปัจจุบันน้อยกว่า 10 และ ขอให้เป็นวันที่ดี! หากเวลาปัจจุบันน้อยกว่า 20 มิฉะนั้นจะแสดงผล นอนหลับฝันดี!</p>";
$t = date("H");
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

?>
