<html>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/kezeles.css">

<div style="margin-top: 0px;">
    <?php
      include 'header.php';
    ?>
</div>


<!-- Sidebar -->
<div style="width:280px;   margin-top: 54px;" class="w3-sidebar w3-light-grey w3-bar-block">
<h1>Keresés</h1>
<a>Felhasználó neve:</a>
<input type="text" style=" margin-left: 10px; width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;   background-repeat: no-repeat;" id="myInput" onkeyup="searchBar()" placeholder="irja be a  felhasználó nevét" title="Type in a name"><br>
<a>Felhasználó szintje (0,1,2)</a>
<input type="text" style=" margin-left: 10px; width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;   background-repeat: no-repeat;" id="myInput2" onkeyup="searchBar2()" placeholder="irja be a  felhasználó szintjét" title="Type in a title"><br>
</div>
<!-- Táblázat -->
<table id="table" class="tbl">
  <thead>
  <tr>
    <th>ID</th>
  	<th>Neptunkód</th>
  	<th>Felhasználó Szintje</th>
  	<th>Törlés</th>
    <th>Módosítás</th>
  </tr>
  </thead>
    <tbody>
    <?php
      $fdb = new filesDB();
      $udb = new usersDB();
      $all = $udb->listall();

      for($i = 0; $i<count($all); $i++)
      {
    ?>
      <tr>
      <td><?php echo $all[$i]["ID"];?></td>
      <td><?php echo $all[$i]["Username"];?></td>
      <td><?php echo $all[$i]["Userlvl"];?></td>
      <td><a href="../controller/delete_user.php?id=<?php echo $all[$i]["ID"]; ?>"><img src="img/x.png" type="submit" ></a></td>
      <td><a href="edit_user.php?id=<?php echo $all[$i]["ID"]; ?>"><img src="img/szerk3.png" type="submit"></a></td>
      </tr>
    <?php
      }
   ?>
   </tbody></table>

<script>
  
  function searchBar() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  
  
  function searchBar2() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput2");
    filter = input.value.toUpperCase();
    table = document.getElementById("table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[2];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }       
    }
  }
  </script>

<div style="background-color: rgb(255, 233, 198)">
<?php 
    include 'footer.php';
    ?>
</div>

<style>
  .tbl {
    position: fixed;
    width:75%;
	border:2px solid black;
    background-color: white;
    float: right;
    margin-left: 350px;
    margin-top: 150px;

}
td {
    border:2px solid black;
    text-align: center;
}	
</style>
</html>


