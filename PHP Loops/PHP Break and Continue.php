<?php
echo "<font color='#993300'><h1>PHP หยุดและดำเนินการต่อ</h1>";
echo "<font color='#993300'><p>คุณได้เห็นbreakคำสั่งที่ใช้ในบทก่อนหน้าของบทช่วยสอนนี้แล้ว มันถูกใช้เพื่อ กระโดดออก ของswitchคำสั่ง</p>";
echo "<font color='#993300'><p>เดอะbreakสั่งสามารถใช้เพื่อกระโดดออกจากวง</p>";
echo "<font color='#993300'><p>ตัวอย่างนี้กระโดดออกจากลูปเมื่อxเท่ากับ 4 </p>";
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }

  //
  echo "<font color='#993300'><h1>PHP ดำเนินการต่อ</h1>";
  echo "<font color='#993300'><p>เดอะcontinueสั่งจะแบ่งการวนซ้ำหนึ่งครั้ง (ในลูป) หากมีเงื่อนไขที่ระบุเกิดขึ้น และดำเนินการต่อด้วยการวนซ้ำถัดไปในลูป</p>";
  echo "<font color='#993300'><p>ตัวอย่างนี้ข้ามค่า4</p>";
  for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      continue;
    }
    echo "The number is: $x <br>";
  }
//
echo "<font color='#993300'><h1>หยุดและดำเนินการต่อในขณะที่วนซ้ำ</h1>";
echo "<font color='#993300'><p>คุณยังสามารถใช้breakและcontinueในwhileลูป</p>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
}
 echo "<br>";
$x = 0;

while($x < 10) {
  if ($x == 4) {
    $x++;
    continue;
  }
  echo "The number is: $x <br>";
  $x++;
}

?>
<?php
$url = 'https://youtu.be/BUD0m11eKMU';
echo '<br><center><a href="'.$url.'">2SOUL FEAT. MAIYARAP - HOW ARE YOU (MIXTAPE)</a>';
?>