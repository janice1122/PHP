<?php
session_start();
if($_SESSION["login"]=="president"){

}else{
    header("Location:week5_error.php");
}
?>
<HTML>
<head>
<meta charset="utf-8">
</head>
<body>

<a href="week5_president_text.php">president</a><br/>
<a href="week5_teacher_text.php">teacher</a><br/>
<a href="week5_logout.php">Logout</a>


</body>

</HTML>
