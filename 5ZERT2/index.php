<?php
$num = 1;
if(isset($_COOKIE['num'])){ 
	$num = $_COOKIE['num'];
	$tm = $_COOKIE['time'];
}
$num++;
	setCookie('num', $num);
	setCookie("time", date("H:i:s"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if($num>2){
echo $_COOKIE['num']."<br>"; 
echo $_COOKIE['time'];
}
?>
</body>
</html>