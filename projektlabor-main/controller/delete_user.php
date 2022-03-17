<?php
include '../model/db.php';
require "../model/usersDB.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$data=$_GET['id'];


$asd = new usersDB();

if(empty($data))
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else
{

    $asd ->delete_user($data);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}