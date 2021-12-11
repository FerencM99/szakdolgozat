 <?php
 require "../model/filesDB.php";
 $fdb = new filesDB();


 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
    $fileName = filter_input(INPUT_POST, 'Filename');
    $description = filter_input(INPUT_POST, 'Link');
    $Owner = filter_input(INPUT_POST, 'Username');
    $cat = filter_input(INPUT_POST, 'CatName');
    $public = filter_input(INPUT_POST, 'Public');
    $path = "../uploads/".$fileName;
    $fileTmpName = $_FILES['file']['tmp_name'];

    $fdb->uploadfile($filename, $description, $Owner, $cat, $public);
    move_uploaded_file($fileTmpName,$path);

 }

    
//header('Location:../view/main.php');
?>    