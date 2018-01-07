<?php
class DB{

  const HOST = 'mysql:host=localhost';
  const DBNAME = 'dbname=dankeyswebshop';
  const USER = 'dankey';
  const PW = 'J2DGi7Ql#XG&u^';

  public $db;
  private static $instance;

  private function __construct(){
    $this->db = new PDO(HOST.DBNAME,USER,PW);
  }

  public static function getInstance(){
    if(!isset(self::$instance)){
      $object = __CLASS__;
      self::$instance = new $object;
    }
    return self::$instance;
  }

}

?>
