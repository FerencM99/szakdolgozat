<?php


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
    function editF($id,$CatName=null,$description=null) {
        $this->log('Fájl modosításra került ('.$id.' | '.$CatName.' | '.$description.')');

        $code = "UPDATE `files` SET";

        if ($CatName != null and $description != null) {
            $code = $code."`CatName`='".$CatName."',";
        }else if ($CatName != null) {
                $code = $code."`CatName`='".$CatName."'";
            }
        if ($description != null) {
            $code = $code."`Link`='".$description."'";
        }
              
        $code = $code." WHERE `ID`='".$id."';";
        $this->select($code);
    }
    function editfile($ID, $CatName=null, $description=null) {
        $data = $this->select("SELECT * FROM `files` WHERE `ID` = '".$ID."' ;");
        if ($CatName == null) {
            $CatName = $data[0]['CatName'];
        }
        if ($description == null ) {
            $description = $data[0]['Link'];
        }
        $this->select("UPDATE `files` SET `CatName`='".$CatName."',`Link`='".$description."' WHERE `ID` = '".$ID."' ;");
        $this->log($ID."-es fájl modosításra került. kategória neve: ".$CatName.", leírása: ".$description);

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