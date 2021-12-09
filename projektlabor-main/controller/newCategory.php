<?php
require "../model/categorysDB.php";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $catName = filter_input(INPUT_POST, 'catname');
    $description = filter_input(INPUT_POST, 'description');
}

$cdb = new categorysDB();
if(empty($catName) || empty($description) ){
    ?>
    <script>
    setTimeout(function(){
        window.location="kezeles.php";
        alert("Sikeres módosítás");
    }, 1000);        
</script>
<?php
}
else
{
    $cdb->createcategory($catName,$description);
}


header('Location:../view/kat.php');

?>