<?php
include '../model/db.php';
require '../model/filesDB.php';

$ecat = new filesDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ecat->editF(filter_input(INPUT_POST, 'uid'), filter_input(INPUT_POST, 'kat'), filter_input(INPUT_POST, 'link'));

}
?>
<script type="text/javascript">
        window.location="../view/main.php";
    </script>