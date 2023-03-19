<?php
ob_start();
session_start();
if($_SESSION["login"]=="No"){

}else{
    header("Location:error.php");
}
?>
<HTML>
<head>
<meta charset="utf-8">
</head>
<body>
登入失敗
網頁將在三秒後跳回登入頁面或
<a href="week5_index.php">點選這裡</a>


<?php
header("Refresh:3;url:week5_index.php");

?>  
</body>
   
</HTML>
<?php ob_flush();?>

