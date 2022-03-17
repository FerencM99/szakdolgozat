<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}
require "../model/db.php";
require "../model/filesDB.php";
 $fdb = new filesDB();


    $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
    $user = $_SESSION["username"];
    $description = filter_input(INPUT_POST, 'description');
    $cat = filter_input(INPUT_POST, 'category');
    $path = "../uploads/".$pname;
    move_uploaded_file($tname,$path);
    $fdb->uploadfile($pname, $description, $user, $cat);
      header('Location:../view/main.php');
}
 else{
?>
  <script>
    alert("Fájl feltöltése sikertelen!");
  </script> 
  <?php
header('Location:../view/upload_file.php');
  }
 

 ?>