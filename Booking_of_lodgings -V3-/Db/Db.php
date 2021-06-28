<?php

namespace App\Db;

//On importe PDO
use PDO;
use PDOException;

class Db extends PDO {

    //Instance unique de la classe
    private static $instance;
    
    //Information de connexion -> CONSTANTE DE CLASS
    private const DBHOST = 'localhost';
    private const DBUSER = 'root';
    private const DBPASS = '';
    private const DBNAME = '';
    
    private function __construct() {

        //DSN de connexion
        $_dsn = 'mysql:dbname'. self::DBname . ';host=' .self::DBHOST;

        //On appelle le constructeur de la class PDO
        try{
            parent::__construct($_dsn, self::DBUSER, self::DBPASS);

            $this->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, 'SET NAMES utf8');
            $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    //methode statique pour génerer une instance ou recuperer l'instance existante
    public static function getInstance() {

        if(self::$instance === null){
            self::$instance = new self();
        }
        return self::$instance;
    }

}