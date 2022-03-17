<?php
include '../model/db.php';
require "../model/categorysDB.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data=$_GET['id'];


$asd = new categorysDB();

if($data == 1)
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else
{

    $asd ->deletecategory($data);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
