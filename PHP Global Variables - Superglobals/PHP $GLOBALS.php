<!DOCTYPE html>
<html>
<body>
<style>
div.a {
	text-align: center;
}
</style>
<div class ="a">
<h1>PHP ซุปเปอร์โกลบอล GLOBALS</h1>
<h2>ตัวแปร Super global เป็นตัวแปรในตัวที่พร้อมใช้งานเสมอในทุกขอบเขต</h2>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</div>
</form>
<?php
echo "<center><font color='#993300'>"; //สีตัวผลลัพธ์
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br><center><img src='img/GR1.jpg'\" width=\"1000\" height=\"200\"><br>";

?>
</body>
</html>


