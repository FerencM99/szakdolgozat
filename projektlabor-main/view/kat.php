<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="margin-top: 0px;">
    <?php
   include 'header.php';
   include '../model/categorysDB.php';
    ?>
</div>
<style>

.button{
	color: white;
	margin-top: 0px;
    border-radius: 30px 30px 30px 30px;
	width: 180px;
	background-color: #401b58;
  	padding: 14px 25px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;

}
.open-button {
  background-color: #401b58;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  border-radius: 30px 30px 30px 30px;
}

/* popup form - alapértelmezetten rejtett */
.form-popup {
  display: none;
  position:absolute;
  top: 12%;
  left: 45%;
  border: 3px solid #401b58;
  z-index: 9;
}

/* a poup teste */
.form-container {
  max-width: 350px;
  padding: 20px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=tipus] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}



/* Gomb style */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 10px;
  opacity: 0.8;
}


.form-container .cancel {
  background-color: red;
}
</style>
</head>
<body>



<!-- Hozzáadás PopUp -->

<div>
	<p align="right">
		<input type="submit"	style="width: 210px; right: 500px;" class="open-button"  onclick="openForm()" value="új elem hozzáadása">
	</p>

	<div class="form-popup" id="myForm">
  <form class="form-container"  method="POST" action="../controller/newCategory.php">
    <h1>Új elem feltöltése</h1>

    <label for="name">Kategória neve</label>
	<input name="catname" type="text" required placeholder="Ird be a kategória nevét" >
    
    <label  for="tipe">Leírása</label>
    <input type="text" name="description" required placeholder="A kategória leírása" >

    <button type="submit" onclick="window.location='../controller/newCategory.php'" class="btn">Feltöltés</button>
    <button type="submit" class="btn cancel" onclick="closeForm()">Bezár</button>
  </form>
</div>


<table id="table"><thead><tr>
	<th style="width: 50px;">ID</th>
	<th style="width: 200px;">Kategória neve</th>
  <th style="width: 250px;">Leírása</th> 
	<th style="width: 50px;">Törlés</th>
  <th style="width: 50px;">Módosítás</th>
    </thead>
  
    <tbody>
    <?php
      $cat = new categorysDB();
      $res = $cat->listall();

      for($i = 0; $i<count($res); $i++)
      {
        ?>
    <tr>
    <td><?php echo $res[$i]['ID'];?></td>
	  <td><?php echo $res[$i]['CatName'];?></td>
    <td><?php echo $res[$i]['Description'];?></td>
    <td><a href="../controller/delete_cat.php?id=<?php echo $res[$i]['ID']; ?>"><img src="img/x.png" type="submit" ></a> </td>
    <td><a href="katmod.php?id=<?php echo $res[$i]['ID']; ?>" style="right=550px ;"><img src="img/szerk3.png" type="submit"></a></td>
  <?php
}
   ?>
         
<style>
button {
    background-color:#401b58;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  border-radius: 8px;
}
#table {
	width:90%;
	border:2px solid black;
    margin-top: 50px;
    margin-left: 5%;
  background-color: white;
}
td {
    border:2px solid black;
    text-align: center;
}
</style>
</tbody></table>


</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<div>
<?php
    include 'footer.php';
    ?>
</div>
</body>
</html>


