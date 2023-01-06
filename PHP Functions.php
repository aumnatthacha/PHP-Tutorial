<?php
echo "<font color='#330033'><h1>ฟังก์ชั่น PHP</h1>";
echo "<font color='#993300'><p>ในตัวอย่างด้านล่าง เราสร้างฟังก์ชันชื่อ writeMsg() วงเล็บปีกกาเปิด ( { ) 
    ระบุจุดเริ่มต้นของโค้ดฟังก์ชัน และวงเล็บปีกกาปิด ( } ) ระบุจุดสิ้นสุดของฟังก์ชัน ฟังก์ชันจะแสดงผล Hello world!
     หากต้องการเรียกใช้ฟังก์ชัน ให้เขียนชื่อตามด้วยวงเล็บ (): </p>";
     function writeMsg() {
        echo "Hello world!";
      }
      writeMsg(); // call the function

      //
echo "<font color='#993300'><h1>อาร์กิวเมนต์ของฟังก์ชัน PHP</h1>";
echo "<font color='#993300'><p>ข้อมูลสามารถส่งผ่านไปยังฟังก์ชันผ่านอาร์กิวเมนต์ อาร์กิวเมนต์ก็เหมือนกับตัวแปร</p>";
echo "<font color='#993300'><p>อาร์กิวเมนต์ถูกระบุหลังชื่อฟังก์ชันภายในวงเล็บ คุณสามารถเพิ่มอาร์กิวเมนต์ได้มากเท่าที่คุณต้องการ เพียงคั่นด้วยเครื่องหมายจุลภาค</p>";
echo "<font color='#993300'><p>ตัวอย่างต่อไปนี้มีฟังก์ชันที่มีหนึ่งอาร์กิวเมนต์ - เมื่อฟังก์ชัน familyName() ถูกเรียกใช้ เราจะส่งต่อชื่อ (เช่น Jani) 
และชื่อนั้นจะถูกใช้ในฟังก์ชัน ซึ่งแสดงชื่อแรกที่แตกต่างกันหลายชื่อ แต่นามสกุลเท่ากัน:
</p>";
// function familyName($fname) {
//   echo "$fname Refsnes.<br>";
// }
// familyName("Jani");
// familyName("Hege");
// familyName("Stale");
// familyName("Kai Jim");
// familyName("Borge");
echo "<br><img src='img/FU1.jpg'><br>";

//
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege","1975");
  familyName("Stale","1978");
  familyName("Kai Jim","1983");
  echo "<br><img src='img/FU2.jpg'><br>";


  //
  
echo "<font color='#330033'><h1>PHP เป็นภาษาที่พิมพ์หลวมๆ</h1>";
  echo "<br><img src='img/FU3.jpg'><br>";
//   function addNumbers(int $a, int $b) {
//     return $a + $b;
//   }
//   echo addNumbers(5, "5 days"); 
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

  //
    echo "<font color='#330033'><p> เราพยายามส่งทั้งตัวเลขและสตริงไปยังฟังก์ชัน แต่ที่นี่เราได้เพิ่มการstrict ประกาศ </p>";
    echo "<font color='#330033'><p> เพื่อระบุว่า strict เราต้องตั้งค่า declare(strict_types=1);.จะต้องอยู่ในบรรทัดแรกของไฟล์ PHP</p>";
    echo "<br><img src='img/FU4.jpg'><br>";
  
//
    echo "<font color='#330033'><h1>ค่าอาร์กิวเมนต์เริ่มต้นของ PHP </h1>";
    echo "<br><img src='img/FU5.jpg'><br>";

    //
    echo "<font color='#330033'><h1> ฟังก์ชั่น PHP - คืนค่า</h1>";
    echo "<br><img src='img/FU6.jpg'><br>";

    //
    echo "<font color='#330033'><h1>การประกาศประเภทผลตอบแทนของ PHP</h1>";
    echo "<br><img src='img/FU7.jpg'><br>";

    //
    echo "<font color='#330033'><p>คุณสามารถระบุประเภทการส่งคืนที่แตกต่างจากประเภทอาร์กิวเมนต์ได้ แต่ต้องแน่ใจว่าการส่งคืนเป็นประเภทที่ถูกต้อง:</p>";
    echo "<br><img src='img/FU8.jpg'><br>";

    //
    echo "<font color='#330033'><p>ใช้อาร์กิวเมนต์ pass-by-reference เพื่ออัปเดตตัวแปร</p>";
    echo "<br><img src='img/FU9.jpg'><br>";

  ?>


