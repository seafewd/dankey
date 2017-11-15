<?php
class DB extends mysqli {

  const HOST      = "localhost";
  const USER      = "www";
  const PW        = "w3!";
  const DB_NAME   = "course";

  static private $instance;

  private function __construct() {
    parent::__construct(self::HOST, self::USER, self::PW, self::DB_NAME);
  }

  static public function getInstance() {
    if ( !self::$instance ) {
      self::$instance = new DB();

      //failed to connect
      if(self::$instance -> connect_errno > 0) {
        die("Unable to connect to database [".self::$instance -> connect_error."]");
      }
    }
    return self::$instance;
  }

  static public function doQuery($sql) {
    return self::getInstance() -> query($sql);
  }


}
?>
