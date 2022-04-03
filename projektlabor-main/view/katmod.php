<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/katmod.css">

<div>
    <?php
   include 'header.php';
   include '../model/categorysDB.php';

    ?>
</div>
</head>

<body>

<?php
        $id=$_GET["id"];

        $cdb = new categorysDB();

        $data = $cdb->getcategory($id);
        
        
    ?>
  
    <div class="box">
      <div class="title">
            Módosítás</div>
    <form name="form1" method="post" class="form-horizontal" action="../controller/editCategory.php">
    <input type="hidden" id="uid" name="uid" value="<?php echo $data[0]['ID'];?>">
        <div class="field">
          <input name="kat" id="kat" type="text"  value="<?php echo $data[0]['CatName'];?>">
        </div>
        <div class="field">
          <input name="leiras" id="leiras" type="text" value="<?php echo $data[0]['Description'];?>">
        </div>
        <br>
        <button type="submit" class="btn" value="Submit" >Módosítás</button>

    </form>
        </div>

<style>
body{
	background: #fff;
  background-image: url("img/szines.png");
  background-repeat: no-repeat;
  background-position: 100px;
	color: rgb(255, 233, 198);
	font-family: Arial;
	font-size: 20px;
}

.box{
  width: 380px;
  background: rgb(255, 220, 163);
  border-radius: 20px;
  box-shadow: 0px 15px 20px rgba(0,0,0,0.1);
  margin: 150px;
  float: right;
  }

.box .title{ 
    /* felső lila rész*/
  font-size: 35px;
  font-weight: 600;
  text-align: center;
  line-height: 100px;
  color: rgb(250, 197, 111);
  user-select: none;
  border-radius: 15px 15px 0 0;
  background:  #401b58;
  }
.box form{
  padding: 10px 30px 50px 30px;
  }
.box form .field{
  height: 50px;
  width: 100%;
  margin-top: 20px;
  }
.box form .field input{
  height: 100%;
  width: 100%;
  outline: none;
  font-size: 17px;
  padding-left: 20px;
  border: 1px solid lightgrey;
  border-radius: 25px;
  transition: all 0.3s ease;
  }

.btn{
  background-color: #401b58;
  border: none;
  color: rgb(250, 197, 111);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  border-radius: 25px;
  width:318px;
  }

.select {
  margin-left: 80px;
  font-family: Arial;
  background-color: rgb(255, 220, 163);
  top: 445px;
  width: 160px;
  height: 40px;
  border-radius: 20px;
  }
</style>