<?php

require "../model/filesDB.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data=$_GET['id'];


$asd = new filesDB();

if($data == 1)
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else
{

    $asd ->deletefile($data);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
