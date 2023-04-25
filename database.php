<?php
//connect to our db
//database class
 class Database{

   public $connection;

    public function __construct($config ,$username = 'root', $password = 'eranmonnie'){
       //use http build query for making connection string 
       $dsn = 'mysql:' . http_build_query($config, '', ';');

       $this->connection = new PDO($dsn, $username, $password, [
        //default fetch mode 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]);
    } 
    

    public function query($query, $id = []){
        
        $statement = $this->connection->prepare($query);
        $statement->execute($id);
        return $statement;
    }
}

