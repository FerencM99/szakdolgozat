 <?php
 require "../model/filesDB.php";
 if ($_SERVER['REQUEST_METHOD'] === 'POST') 
 {
    $fileName = filter_input(INPUT_POST, 'Filename');
    $description = filter_input(INPUT_POST, 'Link');
    $Owner = filter_input(INPUT_POST, 'Username');
    $cat = filter_input(INPUT_POST, 'CatName');
    $public = filter_input(INPUT_POST, 'Public');

 }
    $fdb = new filesDB();

    if(empty($fileName) || empty($description) ||empty($Owner) || empty($cat) || empty($public)  ){
        ?>
        <script>
        setTimeout(function(){
            window.location="../view/main.php";
            alert("Sikeres Fájlfeltöltés");
        }, 1000);        
    </script>
    <?php
    }
    else
    {
        $fdb->uploadfile($filename, $description, $Owner, $cat, $public);
    }
    
header('Location:../view/main.php');
?>    