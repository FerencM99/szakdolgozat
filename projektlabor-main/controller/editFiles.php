<?php
require '../model/filesDB.php';

$ecat = new filesDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ecat->editfile(filter_input(INPUT_POST, 'uid'), filter_input(INPUT_POST, 'kat'), filter_input(INPUT_POST, 'leiras'));

}
?>
<script type="text/javascript">
        window.location="../view/kat.php";
    </script>