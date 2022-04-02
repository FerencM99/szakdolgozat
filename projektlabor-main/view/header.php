<?php
/*/
---
Tesztek
---/*/



if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}//If User is logged in the session['user_logged_in'] will be set to true

//if user is Not Logged in, redirect to login.php page.
if (isset($_SESSION['user_logged_in']) == FALSE ) {
  header('Location:../view/login.php');
}
require "../model/db.php";
include '../model/filesDB.php';
include "../model/usersDB.php";

$udb = new usersDB();
$userLVL = $udb->getLVL($_SESSION["username"]);

?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  float: left;
  margin: 0px;
}

.topnav {
  width: 100%;
  position: fixed;
  overflow: hidden;
  background-color: #401b58;

}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #401b58;
  color: white;
}

.topnav a.active {
  background-color: #401b58;
  color: white;
}
</style>
</head>
<body>
<div class="topnav">
  <a class="active" href="main.php">Főoldal</a>
  <a style="  float: right;color:yellow;"> <?php echo $_SESSION["username"]; ?></a>
  <a style =" float: right;" class="active" href="logout.php"> Kijelentkezés</a>
    <?php
    if ($userLVL==1) {
        ?>
        <a href="kat.php">kategóriák kezelése</a>
        <?php
    }

    ?>
    <?php
    if ($userLVL==2) {
        ?>
        <a href="kezeles.php">Felhasználó kezelés</a>
        <a href="reg.php">felhasználó létrehozás</a>
        <a href="log.php">log kezelése</a>
        <a href="kat.php">kategóriák kezelése</a>
        <?php
    }

    ?>



</div>


</body>
</html>
<?php
?>