<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}

$fileDB = new filesDB();
$res = $fileDB->listallfiles();

$userDB = new usersDB();
$user = $userDB->listall();
?>
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet">

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
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #401b58;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  border-radius: 30px 30px 30px 30px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position:absolute;
  top: 15%;
  left: 45%;
  border: 3px solid #401b58;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 350px;
  padding: 20px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=tipus] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=tipus]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 5px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

  #lbl {
  font-family: sans-serif;
  background-color: indigo;
  color: white;
  padding: 16px 30px;
  border: none;
  cursor: pointer;
  margin-bottom: 10px;
}

#file-chosen{
  margin-left: 0.3rem;
  font-family: sans-serif;
}
}
</style>


</head>
<body>
<div>

	<p align ="right">
		<input type="button"	style="width: 210px; right: 500px;" class="open-button"  onclick="document.location='upload_file.php'" value="új elem hozzáadása">
 		<input type="button" 	onclick="document.location='logout.php'" class="button" value="Kijelentkezes">
	</p>

	<div class="form-popup" id="myForm">
  <form class="form-container"  method="POST" enctype="multipart/form-data">
    <h1>Új elem feltöltése</h1>
	<input type="text" placeholder="Ird be a fájl nevét" name="title" required>
    
    <label for="tipe"><b>Leírás:</b></label>
    <input type="text" placeholder="A fájl leírása" name="link" required>
    <input type="checkbox" checked="checked" style="height:25px; width:25px;"> Publikus
    <span class="checkmark"></span>

    <label style="margin-left:13px;" for="cars">Kategória:</label>

  <br><input type="file" name="file" id="actual-btn" hidden/>
  <label id="lbl" for="actual-btn" >Válassz fájlt</label>
  <span id="file-chosen">Nincs fájl kiválasztva</span>
  <br><br><input type="submit"  required onclick="document.location='../controller/addFile.php'" class="btn"/>
      <button type="submit" class="btn cancel" onclick="closeForm()">Bezár</button>
  </form>
</div>


<table style="margin-left:10%;" id="table"><thead><tr>

<?php

if (isset($_SESSION['user_logged_in']) == TRUE )
{
    if ($userDB->getLVL($_SESSION["username"])>=1)
    {
    ?>
    	<th style="width:50px;">ID</th>
    <?php
    }
    ?>
      <th style="width:250px;">Fájl neve</th>
      <th style="width:500px;">Leírás</th> 
      <th style="width:200px;">Név</th> 
      <th style="width:100px;">Kategória</th>
    	<th style="width:50px;">Törlés</th>
      <th style="width:25px;">Módosítás</th>
      <th style="width:25px;">Letöltés</th>
        </thead>
        <tbody>
          <?php
          for($i = 0; $i<count($res); $i++)
          {
          ?>
      <tr>
      <?php
    if ($userDB->getLVL($_SESSION["username"])>=1)
    {
    ?>
      <td><?php echo $res[$i]['ID'];?></td>
    <?php
    }
    ?>
    	<td><?php echo $res[$i]['Filename'];?></td>
      <td><?php echo $res[$i]['Link'];?></td>
      <td><?php echo $res[$i]['Username'];?></td>
      <td><?php echo $res[$i]['CatName'];?></td>
      <td><a href="../controller/delete_file.php?id=<?php echo $res[$i]['ID']; ?>"><img src="img/x.png" type="submit" ></a> </td>
      <td><a href="editFile.php?id=<?php echo $res[$i]['ID']; ?>" style="right=550px ;"><img src="img/szerk3.png" type="submit"></a></td>
      <td><a href="../controller/download.php?id=<?php echo $res[$i]['ID']; ?>"><img src="img/letöltés.png" type="submit" ></a> </td>

      </tr>

    <?php
    }
}
else
{
  echo 'error';
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
  background-color: white;
  margin-bottom: 200px;
}
td {
    border:2px solid black;
    text-align: center;
}
</style>
</tbody></table>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
const actualBtn = document.getElementById('actual-btn');

const fileChosen = document.getElementById('file-chosen');

actualBtn.addEventListener('change', function(){
  fileChosen.textContent = this.files[0].name
})
</script>


</body>
</html>