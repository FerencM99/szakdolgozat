<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!-- Sidebar -->

<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:250px; float: left; top: 54px; height: 100%; z-index: 1; padding-top: 40px;">
<h1>Keresés</h1>
<a>Fájl neve</a>
<input type="text" style="width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;   background-repeat: no-repeat;" id="myInput" onkeyup="searchBar()" placeholder="irja be a  fájl nevét" title="Type in a name"><br>
<a>Fájl leírása</a>
<input type="text" style="width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;    background-repeat: no-repeat;" id="myInput2" onkeyup="searchBar2()" placeholder="irja be a  leírást" title="Type in a title"><br>
<a>Felhasználó neve</a>
<input type="text" style="width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;    background-repeat: no-repeat;" id="myInput3" onkeyup="searchBar3()" placeholder="irja be a  felhasználó nevét" title="Type in a title"><br>
<a>Fájl kategóriája</a>
<input type="text" style="width:250px; padding-left: 25px; background-image: url('img/search.png');   background-position: 1px 3px;    background-repeat: no-repeat;"	id="myInput4" onkeyup="searchBar4()" placeholder="irja be a fájl kategóriát" title="Type in a title"><br>
</div>
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


function searchBar3() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput3");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
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


function searchBar4() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput4");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[4];
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
      
</body>
</html>
