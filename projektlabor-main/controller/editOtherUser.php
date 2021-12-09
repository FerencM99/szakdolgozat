<?php
require '../model/usersDB.php';

$eur = new usersDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $eur->edit_user(filter_input(INPUT_POST, 'uid'), filter_input(INPUT_POST, 'neptun'), filter_input(INPUT_POST, 'pw'), filter_input(INPUT_POST, 'userlvl'));


}
?>
<script type="text/javascript">
        window.location="../view/kezeles.php";
    </script>