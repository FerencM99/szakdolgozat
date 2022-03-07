<?php
  session_start();

require "../model/filesDB.php";
 $fdb = new filesDB();


    $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
    $user = $_SESSION["username"];
    $description = filter_input(INPUT_POST, 'description');
    $Owner = filter_input(INPUT_POST, 'username');
    $cat = filter_input(INPUT_POST, 'category');
    $path = "../uploads/".$tname;
    $fdb->uploadfile($pname, $description, $user, $cat);
    move_uploaded_file($pname,$path);
    ?>
    <script>
      alert("Fájl sikeresen feltöltve!");
    </script> 
    <?php
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