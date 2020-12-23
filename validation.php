<?php
require_once("include/initialize.php");  

$studentid = $_SESSION['StudentID'];
$exersiceid = $_POST['ExerciseID'];
$value = $_POST['Value'];


$sql = "SELECT * FROM `tblexercise` WHERE  `ExerciseID`='{$exersiceid}'";
$mydb->setQuery($sql);
$quiz = $mydb->loadSingleResult();

$answer = $quiz->Answer;
$lessonid = $quiz->LessonID;

if ($answer == $value) {
	$score= 1;
}else{
	$score = 0;
}

$sql = "SELECT * From tblscore WHERE ExerciseID = '{$exersiceid}' AND StudentID='{$studentid}'";
$mydb->setQuery($sql);
$row = $mydb->executeQuery();
$maxrow = $mydb->num_rows($row);

if ($maxrow>0) { 
	$sql = "UPDATE tblscore SET Score='{$score}' WHERE ExerciseID = '{$exersiceid}' AND StudentID='{$studentid}'";  
	$mydb->setQuery($sql);
	$mydb->executeQuery();

}else{ 
	$sql = "INSERT INTO tblscore (`LessonID`,`ExerciseID`, `StudentID`, `Score`) VALUES ('{$lessonid}','{$exersiceid}','{$studentid}','{$score}')";
	$mydb->setQuery($sql);
	$mydb->executeQuery(); 
}


?>