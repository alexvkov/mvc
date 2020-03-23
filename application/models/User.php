<?php
namespace application\models;
use application\core\Model;

class User extends Model
{
    public function getUser(){
        $resultUser = $this->db->queryUser();
        return $resultUser;
    }
}