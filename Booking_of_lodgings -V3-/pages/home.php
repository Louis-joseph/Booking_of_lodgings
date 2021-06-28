<?php
// namespace ....;

// use PDO;

class ConnexionHome {
    
    protected $servername;
    protected $dbname;
    protected $username;
    protected $password;
    private $dbPDO;

    public function __construct($servername, $dbname, $username, $password) {
        //on passe les differents élements que l'on enregistre en attributs
        $this->servername=$servername;
        $this->dbname=$dbname;
        $this->username=$username;
        $this->password=$password;
    }

    //Me renvoie une instance de PDO
    public function getPDO(): PDO {
        try {
            $db = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
            return $db;

        }catch(PDOException $e) {
            echo 'connexion failed:' .$e->getMessage();
        }
    }

    public  function getservername() {
        
        return $this->id;
    }
}

?>
