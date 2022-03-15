<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}//If User is logged in the session['user_logged_in'] will be set to true

//if user is Not Logged in, redirect to login.php page.
if (isset($_SESSION['user_logged_in']) == FALSE ) {
  header('Location:../view/login.php');
}
else{
  require "../model/categorysDB.php";
  $cdb = new categorysDB();  
  $res =$cdb->listall();
}

?>

<!DOCTYPE html>
<html>
<head>
<div style="margin-top: 0px;">
    <?php
   include 'header.php';
    ?>
</div>


<div>
    <?php
   // include 'sidebar.html';
    ?>
</div>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
    
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
#table {
	width:90%;
    margin-top: 50px;
  background-color: white;
}
td {
    border:2px solid black;
    text-align: center;
}
</style>
</head>
<body>

<table>
  <?php          
            for($i = 0; $i<count($res); $i++)
              { 
               // if($name == $cdb[$i]['CatName'])
                //{
                  ?><tr> <td> <a href="main.php"><?php echo "<option>".$res[$i]['CatName']."</option>";?></a></td></tr><?php
                //}
               // $result = $cdb->select("SELECT * FROM `categorys` WHERE `CatName` = '".$name."' ;");
              }
        ?> 
</table>
</body>