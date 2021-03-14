<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
    <p><label>выбирете город<em>*</em></label>
    <select name="city" name="cit">
       <option value="1">Турция</option>
        <option value="2">Египет</option>
        <option value="3">Италия</option>
    </select></p>
   <p><label>выбирете количество дней<em>*</em></label>
    <input type="text" name="day"/></p>
   <p><label>скидка 5%<em>*</em></label>
   <input type="checkbox" name="choose"/></p>
   <input type="submit" value="sub">
   </form>
<?php
if (isset($_GET['city']) && is_numeric($_GET['day'])){
    $money = 0;
    
   if (isset($_GET['choose'])==true){
        $money = 400 /100 *5;     
    }
    if ($_GET['city']==1){
        $nmoney = $_GET['day'];
        $nmoney *= 400 - $money;
        echo "стоимость $nmoney ";
    }
    if ($_GET['city']==2){
        $nmoney = $_GET['day'];
        $nmoney *= 400 - $money;
        $nbmoney = $nmoney/100 *10;
        $ncmoney = $nmoney + $nbmoney;
        echo "стоимость $ncmoney ";
    }
    if ($_GET['city']==3){
        $nmoney = $_GET['day'];
       $nmoney *= 400 - $money;
       $nbmoney = $nmoney/100 *12;
      $ncmoney = $nmoney + $nbmoney;
        echo "стоимость $ncmoney ";
    }
} 
?>
</body>
</html>
