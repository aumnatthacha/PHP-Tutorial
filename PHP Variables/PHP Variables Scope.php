<h1>ขอบเขตตัวแปร PHP</h1>
<h3>ตัวแปรที่มีขอบเขตส่วนกลาง global  {$x ใส่ซ้ำไม่ขึ้น} </h3>
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  //echo "<p>Variable x inside function is: $x</p>"; 
  echo "<p>Variable x inside function is:</p>";
} 
myTest();
//echo "<p>Variable x outside function is: $x </p>";
echo "<p>Variable x outside function is: $x </p>";

echo "<br><img src='img/v2.jpg'>";
?>

<h1><br>ตัวแปรที่ประกาศภายในฟังก์ชันมี LOCAL SCOPE และสามารถเข้าถึงได้ภายในฟังก์ชันนั้นเท่านั้น:</h1>
<h3>ตัวแปรที่มีขอบเขตท้องถิ่น local </h3>
<?php
$x = 5; // local scope
 {
  echo "<p>Variable x inside function is: $x </p>";
} 
// using x outside the function will generate an error
echo "<p>Variable x outside function is: </p>";

echo "<br><img src='img/v3.jpg'>";
?>
