<?php
echo "<center><font color='#993300'><h1>PHP การเรียงลำดับอาร์เรย์</h1>";
echo "<center><font color='#993300'><h2>เรียงลำดับอาร์เรย์จากมากไปน้อย - rsort()</h2>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

//
echo "<br>";
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

//
echo "<center><font color='#993300'><h2>เรียงลำดับอาร์เรย์จากมากไปน้อย - rsort()</h2>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//
echo "<center><font color='#993300'><h2>จัดเรียงอาร์เรย์ (เรียงลำดับ) ตามคีย์ - ksort()</h2>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//
echo "<center><font color='#993300'><h2>จัดเรียงอาร์เรย์ (เรียงลำดับ) ตามค่า - arsort()</h2>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//
echo "<center><font color='#993300'><h2>จัดเรียงอาร์เรย์ (เรียงลำดับ) ตามคีย์ - krsort()</h2>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>


  
