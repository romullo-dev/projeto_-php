<!--Conectar com o PHP-->

<?php

define ("HOST","localhost");
define ("DATABASE","db_clientes");
define ("USER","root");
define ("PASSWORD","");

class Connect {
    protected $connection;

    function __construct() 
    {
        $this->connectionDatabase();
    }

    function connectionDatabase()
    {
        try {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USER, PASSWORD, );

        } catch (PDOException $e) {
            echo 'Erro!' . $e->getMessage();
            die();
        }
    }
}



