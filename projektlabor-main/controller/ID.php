<?php
    if (session_status () == PHP_SESSION_NONE)
    {
      session_start ();
    }
    include '../model/db.php';
    include '../model/filesDB.php';

    $fileDB = new filesDB();
    $res = $fileDB->listallfiles();
    for($i=0;$i<count($res);$i++){
        if($res[$i]['ID'] < $res[$i+1]['ID'])
        {
            $res = $fileDB->select("SELECT * FROM `files` ORDER BY `ID` DESC;");
        }else{
            $res = $fileDB->select("SELECT * FROM `files` ORDER BY `ID`;");
        }
    }


    header('Location:../view/main.php');
    
?>