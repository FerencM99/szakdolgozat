<?php
include '../model/db.php';
require "../model/filesDB.php";
include '../model/usersDB.php';


if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$ID=$_GET['id'];

$udb = new usersDB();
$asd = new filesDB();
$files = $asd->listallfiles();
$data = $asd->getfiledata($ID);
$userLVL = $udb->getLVL($_SESSION["username"]);
$name = $data[0]["Username"];
$data_LVL = $udb->getLVL($name);

if($ID == 1)
{
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
else
{
    if($userLVL >= $data_LVL){
        $asd ->deletefile($ID);
    }
    else{
        ?>
        <script>
            alert("Magasabb felhasználó fájljait nem törölheted");
        </script>
        <?php
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
