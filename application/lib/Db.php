<?php
namespace application\lib;
use PDO;
class Db
{
    protected $db;
    public function __construct()
    {
        $config = require 'application/config/db.php';
        $this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['dbuser'], $config['dbpass']);
    }

    public function queryUser(){
        $query = $this->db->prepare('SELECT * FROM USER');
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function queryFile(){
        $query = $this->db->prepare('SELECT * FROM USER');
        $query->execute();
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }




}