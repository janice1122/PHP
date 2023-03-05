<meta charset="utf-8">
<?php
if(isset($_POST["id"])){
$id=$_POST["id"];
$name=$_POST["name"];
$eat=$_POST["eat"];
$cost=$_POST["cost"];
$advice=$_POST["advice"];

echo"您的學號是：".$id."<br/>";
echo"您的姓名是：".$name."<br/>";

echo"葷素調查：";
if($eat == "meat"){
    echo"葷";
}else{
    echo"素";
}

echo"<br/>";

echo"飲食調查(請勾選不吃的東西)：";
if(isset($_POST["chicken"])){
    $chicken=$_POST["chicken"];
    echo"雞肉";
}
if(isset($_POST["pork"])){
    $chicken=$_POST["pork"];
    echo"豬肉";
}
if(isset($_POST["beef"])){
    $chicken=$_POST["beef"];
    echo"牛肉";
}
if(isset($_POST["seafood"])){
    $chicken=$_POST["seafood"];
    echo"海鮮";
}
if(isset($_POST["egg"])){
    $chicken=$_POST["egg"];
    echo"雞蛋";
}
if(isset($_POST["no"])){
    $chicken=$_POST["no"];
    echo"無";
}

echo"<br/>";

echo"有沒有繳系費：";
if($cost=="paid"){
    echo"有";
}else{
    echo"無";
}

echo"<br/>";


echo"其他建議：<br/>";
echo nl2br(strip_tags($advice));

}else{
    echo"資料輸入錯誤";
}
?>