<?php
echo "<center><font color='#993300'><h1>อาร์เรย์เชื่อมโยง PHP</h1>";
echo "<center><img src='img/AA1.jpg'\" width=\"500\" height=\"400\"><br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br></br>";

//
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}

//
echo "<br><center><img src='img/AA2.jpg'\" width=\"750\" height=\"200\"><br>";

?>