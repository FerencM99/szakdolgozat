<?php

class logDB extends db
{
    function listlog() {
        $result = $this->select("SELECT * FROM `log` ORDER BY ID DESC ;");

        return $result;

    }

}