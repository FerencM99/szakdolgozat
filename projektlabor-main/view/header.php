<?php
/*/
---
Tesztek
---/*/



  session_start();

//If User is logged in the session['user_logged_in'] will be set to true

//if user is Not Logged in, redirect to login.php page.
if (isset($_SESSION['user_logged_in']) == FALSE ) {
  header('Location:../view/login.php');
}
//else{
//  require "../model/categorysDB.php";
//  $udb = new categorysDB();  
//}


?>



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
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
    <?php
    if ($_SESSION['userlvl']==0) {
        ?>
        <a href="reg.php">felhasználó létrehozás</a>
        <a href="kezeles.php">Felhasználó kezelés</a>
        <a href="log.php">log kezelése</a>
        <a href="kat.php">kategóriák kezelése</a>
        <a style="  float: right;color:yellow;"> <?php echo "Felhaszáló bejelenkezve: ".$_SESSION["username"]."[".$_SESSION["userlvl"]."]"; ?></a>
        <?php
    }

    ?>
    <?php
    if ($_SESSION['userlvl']==1) {
        ?>
        <a href="kezeles.php">Felhasználó kezelés</a>
        <a href="kat.php">kategóriák kezelése</a>
        <a style="margin-left: 300px; color:yellow;"> <?php echo "Felhaszáló bejelenkezve: ".$_SESSION["username"]."[".$_SESSION["userlvl"]."]"; ?></a>
        <?php
    }

    ?>



</div>


</body>
</html>
<?php
?>