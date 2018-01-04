<?php
class DB extends mysqli {

  const HOST      = "localhost";
  const USER      = "dankey";
  const PW        = "J2DGi7Ql#XG&u^";
  const DB_NAME   = "dankeyswebshop";

  private static $instance;

  //should be private - doesn't work on PC???? FATAL ERROR
  public function __construct() {
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    parent::__construct(self::HOST, self::USER, self::PW, self::DB_NAME);
  }

  public static function getInstance() {
    if ( !self::$instance ) {
      self::$instance = new DB();

      //failed to connect
      if(self::$instance -> connect_errno > 0) {
        die("Unable to connect to database [".self::$instance -> connect_error."]");
      }
    }
    return self::$instance;
  }

  public static function doQuery($sql) {
    return self::getInstance() -> query($sql);
  }

  public static function createUser($username, $email, $password, $firstname, $lastname) {

  }

}
?>
