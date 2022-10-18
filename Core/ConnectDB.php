<?php
namespace Core;
use \PDO;

class ConnectDB {
    private $link;
    private $host; 
    private $user;
    private $password;
    private $database;
    private $charset;
    

    public function __construct($host, $user, $password, $database, $charset) {
         
        $this->host = $host;
        $this->user = $user;
        $this->password = $password; 
        $this->database = $database;
        $this->charset= $charset;
      
        $this->connect($this->host, $this->database, $this->charset, $this->user, $this->password);
        
    }
    
    
    private function connect(){
        $this->link = new PDO("mysql:host=".$this->host.";dbname=".$this->database.";charset=".$this->charset,$this->user, $this->password);
        return $this->link;   
    }

  /*  public function executeAll($sql, $pdoConst = PDO::FETCH_ASSOC, $param = []){

        $exe = $this->link->prepare($sql);
        
        if($param === []){
            echo 12;
            $exe->execute();
        }else{
            echo 1;
            var_dump($param);
            $exe->execute($param);
        }
        $result = $exe->fetchAll($pdoConst);//default = PDO::FETCH_ASSOC
        
        return $result;
    } */
    
    
    
    
    public function read($sql, $param = [], $pdoConst = PDO::FETCH_ASSOC){

        $exe = $this->link->prepare($sql);
        
       /* if($param === []){
            echo 12;
            $exe->execute();
        }else{
            echo 1;*/
            //var_dump($param);
            $exe->execute($param);
      //  }
        $result = $exe->fetchAll($pdoConst);//default = PDO::FETCH_ASSOC
        return $result;
    } 
    
    public function write($sql, $param){
        $exe = $this->link->prepare($sql);
        $exe->execute($param);
        
    }
    
    
    
    
     public function countRows($sql, $param = []){

        $exe = $this->link->prepare($sql);
        
       
        $exe->execute($param);
     
        $result = $exe->fetch()[0];//default = PDO::FETCH_ASSOC
        return $result;
    } 
    
    
    
  /*  public function executeRow($sql, $param){

        $exe = $this->link->query($sql);
        $exe->execute($param);
            
      
            $result = $exe->fetch_row();
            return $result;  
        } 
    }*/
    
   /* public function executeCount($sql, $param = []){

        $exe = $this->link->prepare($sql);
        
        if($param === []){
            $exe->execute();
        }else{
            $exe->execute($param);
        }
        $result = $exe->rowCount();
        
        return $result;
        
        
    
    }*/
    
    
    
}
