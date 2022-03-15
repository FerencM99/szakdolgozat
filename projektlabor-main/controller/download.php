<?php
if (session_status () == PHP_SESSION_NONE)
{
	session_start ();
}
    include '../model/filesDB.php';
    $fdb = new filesDB();
    $files = $fdb->listallfiles();
    if(!empty($_GET['id'])){
     for($i = 0; $i<count($files); $i++ ){
        if($files[$i]['ID'] == $_GET['id'])
        {
        $fileName = $files[$i]['Filename'];
        }
     }
        $filePath  = "../uploads/".$fileName;
        
        if(!empty($fileName) && file_exists($filePath)){
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/zip");
            header("Content-Transfer-Encoding: binary");
            
            //read file 
            readfile($filePath);
            exit;
        }
        else{
            echo " file not exit ";
        }
    }
    