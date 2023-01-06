<?php
echo "<center><font color='#993300'><h1>PHP อาร์เรย์หลายมิติ</h1>";
echo "<center><font color='#993300'><h2>PHP - อาร์เรย์สองมิติ</h2>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

  //
  echo "<br><center><img src='img/MA1.jpg'\" width=\"750\" height=\"550\"><br>";


    //
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
  echo "<br><center><img src='img/MA2.jpg'\" width=\"750\" height=\"450\"></br>";

  ?>


