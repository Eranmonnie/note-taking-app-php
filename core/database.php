<?php
//connect to our db
//database class
//namespace
namespace core;
//ude sxternam classes 
use PDO;
 class Database{

   public $connection;
   public $statement;

    public function __construct($config ,$username = 'root', $password = 'eranmonnie'){
       //use http build query for making connection string 
       $dsn = 'mysql:' . http_build_query($config, '', ';');

       $this->connection = new PDO($dsn, $username, $password, [
        //default fetch mode 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
       ]);
    } 
  
    
    public function query($query, $id = []){
        
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($id);
       return $this;
    }

    public function fetchall(){
        $result = $this->statement->fetchAll();

        if (! $result){
            abort();
        };
        
        return $result;
    }

    public function fetch(){
        return $this->statement->fetch();
    }

    public function fetchorFail(){
        $result  = $this->fetch();

        if (! $result){
            abort();
        }

        return $result;
    }
}

