<?php 
require_once("include/initialize.php");  
if (!isset($_SESSION['StudentID'])) {
  redirect('login.php');
}
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
  case 'lesson':
    $title = "Lesson";
    $content = 'lesson.php';
   break; 
  case 'exercises':
    $title = "Exercises";
    $content = 'exercises.php';
   break; 
  case 'download':
    $title = "Download";
    $content = 'download.php';
   break; 
  case 'about':
    $title = "About Us";
    $content = 'about.php';
   break; 
  case 'playvideo':
    $title = "Play Video";
    $content = 'playvideo.php';
   break; 
  case 'viewpdf':
    $title = "Play Video";
    $content = 'viewpdf.php';
   break; 
  case 'question':
    $title = "Question";
    $content = 'question.php';
   break; 
  case 'quizresult':
    $title = "Result";
    $content = 'quizresult.php';
   break; 
  default :
    $title = "Home";
    $content    = 'home.php';
}
require_once("theme/templates.php");
?>