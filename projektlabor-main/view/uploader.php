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


</head>
<body>
<div>

	<p>
		<input type="button" class="button"  onclick="document.location='upload_file.php'" value="új elem hozzáadása">
	</p>
  
</div>

<table id="table"><thead><tr>

<?php

if (isset($_SESSION['user_logged_in']) == TRUE )
{
    if ($userDB->getLVL($_SESSION["username"])>1)
    {
    ?>
    	<th style="width:80px;">ID</a></th>
    <?php
    }
    ?>
      <th style="width:200px;">Fájl neve</th>
      <th style="width:500px;">Leírás</th> 
      <th style="width:200px;">Név</th> 
      <th style="width:100px;">Kategória</th>
    	<th style="width:80px;">Törlés</th>
      <th style="width:50px;">Módosítás</th>
      <th style="width:50px;">Letöltés</th>
        </thead>
        <tbody>
          <?php
          for($i = 0; $i<count($res); $i++)
          {
          ?>
      <tr>
      <?php
    if ($userDB->getLVL($_SESSION["username"])>1)
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
#table {
	width:80%;
  position: fixed;
	border:2px solid black;
  background-color: white;
  margin-top: 200px;
  margin-left:300px;
  margin-bottom:300px;
  float:right;
}
td {
    border:2px solid black;
    text-align: center;
}

.button{
  margin: 60px;
  float: right;
  border-radius: 30px 30px 30px 30px;
	width: 180px;
	background-color: #401b58;
  text-align: center;
  text-decoration: none;
 	display: inline-block;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;

}
</style>
</tbody></table>


</body>
</html>