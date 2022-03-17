<?php
include '../model/db.php';
require "../model/usersDB.php";

$udb = new usersDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $neptun = filter_input(INPUT_POST, 'neptun');
    $pass = filter_input(INPUT_POST, 'psw');
    $userlevel = filter_input(INPUT_POST, 'userlvl');
}

$udb->register($neptun,$pass,$userlevel);

?>
    <script type="text/javascript">
        window.location="../view/kezeles.php";
    </script>