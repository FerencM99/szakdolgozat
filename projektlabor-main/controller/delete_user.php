<?php
include '../model/db.php';
require "../model/usersDB.php";


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$id=$_GET['id'];

$udb = new usersDB();

if(empty($id))
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else
{

    $udb ->delete_user($id);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}