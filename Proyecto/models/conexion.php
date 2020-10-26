<?php
class conexion { // Implementación de Singleton
    private static $instancia = null;
    public function __construct() {
        $dsn = 'mysql:dbname=dbseed;host=localhost'; 
        $user = 'root'; 
        $password = ''; 
        try {
            self::$instancia = new PDO($dsn, $user, $password);   
            self::$instancia->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage();
            die();
        }
    }
    public static function singleton() {
        return self::$instancia;
    }
}
?>