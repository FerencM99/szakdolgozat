<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top: 0px;">
    <?php
  if (session_status () == PHP_SESSION_NONE)
    {
      session_start ();
    }
 include '../model/db.php';
 include '../model/categorysDB.php';
 $categorysDB = new categorysDB;
 $res =$categorysDB->listall();
    ?>
</div>
<style>

html,body{
  background: #460142;
  background-repeat: no-repeat;

  
}
.csomag{
  position: absolute;
  right: 30%;
  top: 25%;
  text-align: center;
  font-size: 18px;
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
  width: 80%;
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
.select{
  border-radius: 10px 10px 10px 10px;
}



</style>

    <title>File Upload</title>

</head>
<body>


<div class="csomag">
      <div class="title">
Tölts fel egy új fájlt</div>
<form method="POST" action="../controller/uploadFile.php" enctype="multipart/form-data">
        <div class="field">
            <input type="text" name="description" required placeholder="A fájl leírása" >
        </div>
        <div class="field">
            <label>Kategória</label><br>
            <select name="category">
            <?php
            for($i = 0; $i<count($res); $i++)
              {
                echo "<option>".$res[$i]['CatName']."</option>";
              }
              ?>
            </select>

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