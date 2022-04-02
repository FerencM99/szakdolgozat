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