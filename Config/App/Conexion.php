<?php
class Conexion{
    private $conect;
    
    public function __construct()
    {
        $host = "http://localhost/punto_venta/";
        $db = "sistema"; 
        $charset = "utf8"; 
        $user = ""; 
        $pass = ""; 
        
        $pdo = "mysql:host=".$host.";dbname=".$db.";charset=".$charset;
        try {
            $this->conect = new PDO($pdo, $user, $pass);
            $this->conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión: ".$e->getMessage();
        }
    }
    
    public function connect(){
        return $this->conect;
    }
}
?>
