<!DOCTYPE html>
<html>
<body>
<h1>คำสั่ง PHP echo</h1>
<h4>echoและprintเหมือนกันไม่มากก็น้อย ทั้งคู่ใช้เพื่อส่งข้อมูลออกไปยังหน้าจอ
ความแตกต่างมีขนาดเล็ก: echoไม่มีค่าส่งคืนในขณะที่printมีค่าส่งคืน 1 ดังนั้นจึงสามารถใช้ในนิพจน์ได้ 
echoสามารถใช้หลายพารามิเตอร์ (แม้ว่าการใช้งานดังกล่าวจะเกิดขึ้นได้ยาก) 
ในขณะที่printสามารถรับหนึ่งอาร์กิวเมนต์ echoเร็วกว่าprintเล็กน้อย</h4>

<?php
echo "<h1>คำสั่ง PHP echo
echoสามารถใช้คำสั่งโดยมีหรือไม่มี วงเล็บ: echoหรือecho()แสดงข้อความ
ตัวอย่างต่อไปนี้แสดงวิธีการส่งออกข้อความด้วยecho คำสั่ง (โปรดสังเกตว่าข้อความสามารถมีมาร์กอัป HTML)</h1>";

echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 


้<h1>แสดงตัวแปรตัวอย่างต่อไปนี้แสดงวิธีแสดงผลข้อความและตัวแปรด้วย echo คำสั่ง</h1>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>

<h1>คำสั่งพิมพ์ PHP
printสามารถใช้คำสั่งโดยมีหรือไม่มี วงเล็บ: printหรือprint()แสดงข้อความ
ตัวอย่างต่อไปนี้แสดงวิธีการส่งออกข้อความด้วยprint คำสั่ง (โปรดสังเกตว่าข้อความสามารถมีมาร์กอัป HTML)</h1>
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>

<h1>ตัวอย่างต่อไปนี้แสดงวิธีแสดงผลข้อความและตัวแปรด้วย printคำสั่ง</h1>
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
</body>
</html>
