<?php

namespace App;

class Database{

    private $db_name;
    private $db_user;
    private $db_pass;
    private $db_host;
    private $pdo;

    public function __construct($db_name, $db_user = 'root', $db_pass ='root', $db_host ='localhost'){

        $this->db_name = $db_name;
        $this->db_user = $db_user;
        $this->db_pass = $db_pass;
        $this->db_host = $db_host;

    }

    private function getPDO(){

        $pdo = new PDO('mysql:dbname=hôte;host=localhost', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //stocker dans l'instance
        $this->pdo = $pdo;
        return $pdo;
    }

    public function query($statement){
        $req = $this->getPDO()query('SELECT * From booking');
    }
}



?>
