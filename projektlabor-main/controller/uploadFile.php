<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top: -200px;width: 230%;">
    <?php
 include '../view/header.php';
    ?>
</div>
<style>

html,body{
  display: grid;
  height: 100%;
  place-items: center;
  background: #460142;
  background-repeat: no-repeat;

  
}
.csomag{
  height: 350px;
  width: 480px;
  background: rgb(253, 222, 137);
  border-radius: 20px;
  box-shadow: 100px 150px 20px rgba(0,0,0,0.1);

}
.csomag .title{ 
    /* felső lila rész*/
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: rgb(253, 222, 137);
  user-select: none;
  border-radius: 15px 15px 0 0;
  background:  #401b58;
}
.csomag form{
  padding: 10px 30px 50px 30px;
}

.csomag form .field input{
  width: 100%;
  padding-left: 15px;
  border: 1px solid rgb(253, 222, 137);
  border-radius: 15px 15px 15px 15px;

}

form .content{
  display: flex;
  width: 100%;
  height: 50px;
  font-size: 16px;
  align-items: center;
  justify-content: space-around;
}
form .content .checkbox{
  display: flex;
  align-items: center;
  justify-content: center;
}

.btn{
  width:300px;
  background-color: #401b58;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  font-size: 16px;
  margin-top: 50px;
}

.file_up{
  background-color: rgb(253, 222, 137);
  border: none;
  text-align: center;
  border-radius: 15px 15px 15px 15px;
  margin-top: 10px;

}



</style>

    <title>File Upload</title>

</head>
<body>
<div class="csomag">
      <div class="title">
Bejelentkezés</div>
<form method="POST" enctype="multipart/form-data">
        <div class="field">
            <label  for="tipe">Leírása</label>
            <input type="text" name="description" required placeholder="A fájl leírása" >
        </div>
        <div class="field">
            <label>File Feltötlése</label><br>
            <input type="File" name="file" id="file">
        </div>
        <div class="content">
        <div>
        <button class="btn" type="submit" name="submit">Feltöltés</button>
        </div>

</form>
</div>
 
</body>
</html>
<?php
require "../model/filesDB.php";
 $fdb = new filesDB();


    $pname = $_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];


 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {

    $username = $_SESSION['username'];
    $fileName = filter_input(INPUT_POST, 'filename');
    $description = filter_input(INPUT_POST, 'description');
    $Owner = filter_input(INPUT_POST, 'Username');
    $cat = filter_input(INPUT_POST, 'CatName');
    $path = "../uploads/".$tname;
    move_uploaded_file($pname,$path);

    $fdb->uploadfile($fileName, $description, $username, $cat);

 }
 else{
  echo "Error";

 }

 ?>