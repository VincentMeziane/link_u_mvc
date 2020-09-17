<?php
abstract class Model {
    protected $connection;
    protected $request;

    // const SERVER = 'sqlprive-pc2372-001.privatesql.ha.ovh.net';
    // const USER = 'cefiidev1010';
    // const PASSWORD = 'iC97uU9z';
    // const BASE = 'cefiidev1010';
    const SERVER = 'localhost';
    const USER = 'root';
    const PASSWORD = '';
    const BASE = 'linku';
    public function __construct()
    {
       try {
           $this->connection = new PDO('mysql:host='.self::SERVER .';dbname='.self::BASE, self::USER, self::PASSWORD,
           array( 
            PDO::MYSQL_ATTR_INIT_COMMAND    => "SET NAMES utf8"
            ));
        // Activation des erreurs PDO
           $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Les retours de requête seront en Tableau associatif par défaut
           $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
           $this->connection->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND ,"SET NAMES utf8");
       } catch (Exception $e) {
           die('Erreur : '.$e->getMessage());
       }
    }
}