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
 include '../view/header.php';
 include '../model/categorysDB.php';


 $id=$_GET["id"];
 $cdb = new categorysDB();
 $fdb = new filesDB();

 $kat = $cdb->listall(); 



 $res =$fdb->listallfiles();
 $data = $fdb->getfiledata($id)

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
Fájl módosítása</div>
<form method="POST" action="../controller/editFiles.php" enctype="multipart/form-data">
        <input type="hidden" id="uid" name="uid" value="<?php echo $data[0]['ID'];?>">

        <div class="field">
            <input type="text" id="link" name="link" value="<?php echo $data[0]['Link'];?>">
        </div>
        <div class="asd">
            <label>Kategória</label><br>
            <select id="kat" name="kat">
            <?php
            for($i = 0; $i<count($kat); $i++)
              {
                ?>
                <option <?php if($kat[$i]['CatName'] == $data[0]['CatName']) {echo "selected";} ?>><?php echo $kat[$i]['CatName']?></option>
                <?php
                /*if($res[$i]['CatName'] == $data[0]['CatName']){
                  echo "<option selected>".$res[$i]['CatName']."</option>";
                }else{
                  echo "<option>".$res[$i]['CatName']."</option>";
                }*/
              }
              ?>
            </select>
        <button class="btn" type="submit" name="submit">Módosítás</button>
        </div>

</form>
</div>

</body>
</html>