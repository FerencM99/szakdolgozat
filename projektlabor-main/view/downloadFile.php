<!DOCTYPE html>
<html lang="en">
<head>
<?php 
 include 'header.php';
 ?>
    <meta charset="utf-8">
    <title>upload</title>
</head>
<body>
   
   <?php
    $conn = mysqli_connect('localhost','root','','projektlabor');
    ?>
   <form style="margin-top: -750px;" method="post" enctype="multipart/form-data">

   <table border="1px" align="center">
     
       
              <?php
               $query2 = "SELECT * FROM files";
               $run2 = mysqli_query($conn,$query2);
               
               while($rows = mysqli_fetch_assoc($run2)){
                   ?>
               <tr>   
               <td><a><?php echo $rows['Filename'] ?></a></td><br> 
               <td><a href="../controller/download.php?file=<?php echo $rows['Filename'] ?>"><img src="img/letöltés.png" type="submit"></a></td><br>
               </tr>     
               <?php
               }
               ?>
           </td>
       </tr>
   </table>
   </form>

</body>
</html>