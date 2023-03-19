<?php
session_start();

$presidentID="1";
$presidentPWD="2";
$teacherID="3";
$teacherPWD="4";
$studentID="5";
$studentPWD="6";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($presidentID == $id)&&($presidentPWD == $pwd)){
    $_SESSION["login"]="president";
    header("Location:week5_president.php");
}
else if(($teacherID == $id)&&($teacherPWD == $pwd)){
    $_SESSION["login"]="teacher";
    header("Location:week5_teacher.php");
}
else if(($studentID == $id)&&($studentPWD == $pwd)){
    $_SESSION["login"]="student";
    header("Location:week5_student.php");
}else{
    $_SESSION["login"]="No";
    header("Location:week5_fail.php");
}



?>