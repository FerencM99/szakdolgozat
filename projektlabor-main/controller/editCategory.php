<?php
require '../model/categorysDB.php';

$ecat = new categorysDB();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $ecat->editcategory(filter_input(INPUT_POST, 'uid'), filter_input(INPUT_POST, 'kat'), filter_input(INPUT_POST, 'leiras'));

}
?>
<script type="text/javascript">
        window.location="../view/kat.php";
    </script>