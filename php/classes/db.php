<?php
class DB{

  const HOST = 'mysql:host=localhost';
  const DBNAME = 'dbname=dankeyswebshop';
  const USER = 'dankey';
  const PW = 'J2DGi7Ql#XG&u^';

  public $db;
  private static $instance;

  private function __construct(){
    $info = DB::HOST . ";" . DB::DBNAME;
    $this->db = new PDO($info,DB::USER,DB::PW);
  }

  public static function getInstance(){
    if(!isset(self::$instance)){
      $object = __CLASS__;
      self::$instance = new $object;
    }
    return self::$instance;
  }

  public function getCategoryBySubcategory($subcategory){
    $statement = $this->db->prepare("SELECT DISTINCT category FROM products WHERE subcategory = :subcategory");
    $result = $statement->execute(array('subcategory'=>$subcategory));
    $category = $statement->fetchAll(PDO::FETCH_COLUMN);
    foreach ($category as $cat) {
      return $cat;
    }
  }

  public function getCategoryByProduct($name){
    $stmt = $this->db->prepare("SELECT subcategory FROM graphics_cards WHERE name LIKE :term UNION SELECT name FROM memory WHERE name LIKE :term UNION SELECT name FROM processors WHERE name LIKE :term");
    $stmt->bindParam(':term', $name);
    $stmt->execute();
    $subcategory = $stmt->fetch();
    echo "<script type='text/javascript'>alert('$subcategory');</script>";
    $this->getCategoryBySubcategory($subcategory);
  }
}

?>
