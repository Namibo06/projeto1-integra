<?php
session_start();

$numberMain = $_POST['number_main'];
$condition = !empty($numberMain) && isset($numberMain) && !is_nan($numberMain);

if($condition){
    $predecessor = $numberMain - 1;
    $successor = $numberMain + 1;
    $_SESSION['predecessor'] = $predecessor;
    $_SESSION['successor'] = $successor;
    $_SESSION['numberMain'] = $numberMain;

    header('location: ../pages/result.php');
    exit();
}else{
    header('location: ../index.php');
    exit();
}