<!DOCTYPE html>
<html>
<div style="margin-top: 0px;">
    <?php
   include '../view/header.php';
    ?>
</div>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <label>Descriptions</label>
    <input type="Desc" name="desc">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "projektlabor";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
    #file name with a random number so that similar dont get replaced
     $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'uploads';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, '../'.$uploads_dir.'/'.$pname);


    #sql query to insert into database
    $sql = "INSERT into files(Filename, Link, Username, CatName, Public) VALUES('$title','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 //header('Location:../view/main.php');

 
?>

<div>
<?php
    include '../view/footer.php';
    ?>
</div>