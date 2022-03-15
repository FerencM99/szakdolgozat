<?php
require "db.php";


class filesDB extends db
{
    function uploadfile($filename, $link, $Username, $CatName) {
        $this->select("INSERT INTO `files`(`Filename`, `Link`, `Username`, `CatName`) VALUES ('".$filename."','".$link."','".$Username."','".$CatName."');");
        $this->log($filename." fájl feltöltésre került ".$Username." felhasználó által a ".$CatName." kategóriába ( ".$link." )");

    }
    function deletefile($ID) {
        $this->select("DELETE FROM `files` WHERE `files`.`ID` = ".$ID.";");
        $this->log($ID." fájl törölve lett");
    }
    function editfile($ID, $CatName=null, $description=null) {
        $data = $this->select("SELECT * FROM `files` WHERE `ID` = '".$ID."';");
        $code = "UPDATE `files` SET ";
        if ($CatName !=null and $description !=null) {
            $code = $code."CatName = '".$CatName."', ";
        }
        else if ($CatName !=null){
            $code = $code."`CatName`='".$CatName."'";
        }
        if($description !=null){
            $code = $code." Link = '".$description."'";
        }
        $code = $code." WHERE `ID`='".$ID."';";
        $this->select($code);
        $this->log('File modosításra került ('.$ID.' | '.$CatName.' | '.$description.')');
        
    }
    function getfiledata($ID) {
        $result = $this->select("SELECT * FROM `files` WHERE `ID` = '".$ID."' ;");
        return $result;
    }
    function listallfiles() {
        $result = $this->select("SELECT * FROM `files`;");
        return $result;
    }
    function listfiles($categoryID) {
        $result = $this->select("SELECT * FROM `files` WHERE `CategoryID` = ".$categoryID.";");
        return $result;
    }
}
/*
---
Tesztek
---

$asd = new filesDB();

$asd->uploadfile("Almafa","teszt.hu/almafa",1,2,1);
*/