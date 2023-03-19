<?php
session_start();
if($_SESSION["login"]=="teacher"){

}else{
    header("Location:week5_error.php");
}
?>
<HTML>
<head>
<meta charset="utf-8">
</head>
<body>

<a href="week5_teacher_text.php">teacher</a><br/>
<a href="week5_student_text.php">student</a><br/>
<a href="week5_logout.php">Logout</a>



</body>

</HTML>