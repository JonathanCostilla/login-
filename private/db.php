<?php
class GestorDB{
    
    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "gestor";

    public $conn;

    public function __construct(){
        $this->conn = new mysqli( $this->dbhost, $this->dbuser, $this->dbpass, $this->dbname ) or die(mysql_error());
        $this->conn->set_charset("utf8");
    }

}
?>