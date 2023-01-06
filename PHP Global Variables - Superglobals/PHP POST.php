<!DOCTYPE html>
<html>
<head>
<style>
.color{
	color: red;
}
div.a {
	text-align: center;
}
</style>
</head>
<body>
    <div class = "a">
    <!--ใส่สี   .color เป็นค่าตัวแปล-->
    <h1 class = "color">PHP ซุปเปอร์โกลบอล - $_POST</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>
</div>
<?php
echo "<center><font color='#993300'>"; //สีตัวผลลัพธ์
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br><center><img src='img/GP1.jpg'\" width=\"1000\" height=\"270\"><br>";
?>

</body>
</html>