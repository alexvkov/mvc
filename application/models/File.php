<?php
namespace application\models;
use application\core\Model;

class File extends Model
{
    public function getFile(){
        $resultUser = $this->db->queryFile();
        return $resultUser;
    }
}