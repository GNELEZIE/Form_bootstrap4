<?php 
 class Database{
     
     
     
private static $dbHost = "localhost";
private static $dbName = "form_boostr4";
private static $dbUser ="root";
private static $dbUserPassword ="";
private static $connection = null;
     
 
public static function connect(){ 


try{
    
    self:: $connection = new PDO("mysql:host=". self::$dbHost .";dbname=". self::$dbName,self::$dbUser, self::$dbUserPassword);  
  
}    
  catch(PDOException $e)
  {
      die($e->getMessage());
  }   
     return  self::$connection;
 }
  function disconnect() {
      
 self::$connection= null;
      
  }  
   
 }
     Database ::connect();
?>