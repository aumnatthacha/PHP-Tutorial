<?php
echo "<font color='#993300'><h1>PHP เปลี่ยนคำสั่ง</h1>";
echo "<font color='#993300'><p>คำswitchสั่งใช้เพื่อดำเนินการต่าง ๆ ตามเงื่อนไขที่แตกต่างกัน</p>";
echo "<font color='#993300'><p>ใช้switchคำสั่งเพื่อเลือกหนึ่งในหลาย ๆ บล็อกของโค้ดที่จะดำเนินการ</p>";
echo "<font color='#993300'><p>นี่คือวิธีการทำงาน: อันดับแรก เรามีนิพจน์เดียวn (โดยมากมักจะเป็นตัวแปร) ที่ได้รับการประเมินเพียงครั้งเดียว 
ค่าของนิพจน์จะถูกเปรียบเทียบกับค่าสำหรับแต่ละกรณีในโครงสร้าง หากมีการจับคู่ บล็อกของรหัสที่เกี่ยวข้องกับกรณีนั้นจะถูกดำเนินการ 
ใช้breakป้องกันไม่ให้โค้ดทำงานในกรณีถัดไปโดยอัตโนมัติ จะใช้ คำdefaultสั่งนี้หากไม่พบรายการที่ตรงกัน</p>";

$favcolor = "red";
    switch ($favcolor) {
        case "red":
        echo "Your favorite color is red!";
        break;
        case "blue":
    echo "Your favorite color is blue!";
        break;
        case "green":
    echo "Your favorite color is green!";
        break;
        default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<font color='#993300'><h1>ไวยากรณ์</h1>";
echo "<br><img src='img/sS1.jpg'>";

?>