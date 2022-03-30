<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}
require "../model/db.php";
require "../model/filesDB.php";
 $fdb = new filesDB();
$res = $fdb->listallfiles();

    $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
   // Check file size
   $Size = $_FILES["file"]["size"];
    if ( $Size > 10000000) {
      header('Location:../view/upload_file.php');
    ?>
    <script>
    alert("Fájl feltöltése sikertelen!");
    </script> 
    <?php
    }
    else{
    $user = $_SESSION["username"];
    $description = filter_input(INPUT_POST, 'description');
    $cat = filter_input(INPUT_POST, 'category');
    $c = 0;
    for($i=0;$i<count($res);$i++){
      if($pname == $res[$i]['Filename']){
        echo "baj van ".$i."+1"."-edik fájl neve ugyanez ";
        header('Location:../view/upload_file.php');
        $c = 0;
        break;
      }else{
        $c = 1;
      }
    }
    if($c == 1){
      $path = "../uploads/".$pname;
      echo $pname;
      move_uploaded_file($tname,$path);
      $fdb->uploadfile($pname, $description, $user, $cat);
      header('Location:../view/main.php');
    }else{
      echo $c;
    }
    }
}
 else{
?>
  <script>
    alert("Fájl feltöltése sikertelen!");
  </script> 
  <?php
  }
 

 ?>