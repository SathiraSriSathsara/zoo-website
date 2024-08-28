<?php
class connection{
  public static function getConnection(){
    try{
      $server = "132.145.56.110";
      $db = "zoo-parc";
      $username = "lolc-life";
      $password = "Y8JcgU6t1APy3JQ";

      // Create connection
      $conn = new PDO("mysql:host=$server;dbname=$db;",$username,$password);
      return $conn;
    }catch(Exception $ex){
      throw $ex;
    }
  }
}
?>