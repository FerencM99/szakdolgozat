<?php


class categorysDB extends db
{
    function createcategory($catName,$description) {
        $this->select("INSERT INTO `categorys`(`CatName`, `Description`) VALUES ('".$catName."','".$description."');");
        $this->log($catName." kategória létrehozva");
    }
    function deletecategory($ID) {
        
            $this->select("DELETE FROM `categorys` WHERE `categorys`.`ID` = ".$ID.";");
            $this->log($ID."-es kategória törölve");
    }
    function editcategory($ID,$catName=null,$description=null) {
        $data = $this->select("SELECT * FROM `categorys` WHERE `ID` = ".$ID.";");
        $code = "UPDATE `categorys` SET";
        if ($catName !=null and $description !=null) {
            $code = $code."`CatName`='".$catName."',";
        }
        else if ($catName !=null){
            $code = $code."`CatName`='".$catName."'";
        }
        if($description !=null){
            $code = $code."`Description`='".$description."'";
        }
        $code = $code." WHERE `ID`='".$ID."';";
        $this->select($code);
        $this->log('Kategórai modosításra került ('.$ID.' | '.$catName.' | '.$description.')');

    }

    function listall() {
        $result = $this->select("SELECT * FROM `categorys` ;");

        return $result;
    }

    function getcategory($ID) {
        $result = $this->select("SELECT * FROM `categorys` WHERE `ID` = '".$ID."' ;");

        return $result;

    }

}

