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
    $stmt = $this->db->prepare("SELECT subcategory FROM graphics_cards WHERE name LIKE :term UNION SELECT subcategory FROM memory WHERE name LIKE :term UNION SELECT subcategory FROM processors WHERE name LIKE :term");
    $stmt->bindParam(':term', $name);
    $stmt->execute();
    $subcategory = $stmt->fetch();
    foreach ($subcategory as $subcat) {
      return $this->getCategoryBySubcategory($subcat);;
    }
  }

  public function getPictureByProduct($name){
    $cat = $this->getCategoryByProduct($name);
    $stmt = $this->db->prepare("SELECT picture FROM $cat WHERE name LIKE :name");
    $stmt->bindParam(':name', $name);
    $stmt->execute();
    $pictures = $stmt->fetch();
    foreach($pictures as $picture){
      return $picture;
    }
  }

  public function getProduct($category, $name){
    $statement = $this->db->prepare("SELECT * FROM $category WHERE name = :name");
    $result = $statement->execute(array('name'=>$name));
    $product = $statement->fetch();
    return $product;
  }

  public function createUser($username, $email, $password, $firstname, $lastname, $address, $city, $phone, $language, $birthday, $sex){
    $statement = $this->db->prepare("INSERT INTO users (username, email, password, firstname, lastname, address, city, phone, language, birthday, sex) VALUES
    ('$username', '$email', '$password', '$firstname', '$lastname', '$address', '$city', '$phone', '$language', '$birthday', '$sex')");
    $statement->execute();
  }

  public function getAllProducts($category, $subcategory){
    $query = "SELECT * FROM $category WHERE subcategory = :subcategory";
    $statement = $this->db->prepare($query);
    $result = $statement->execute(array('subcategory'=>$subcategory));
    $product_list = $statement->fetchAll();
    return $product_list;
  }

  public function getAllEntriesByTable($tablename){
    $query = "SELECT * FROM $tablename";
    $statement = $this->db->prepare($query);
    $result = $statement->execute();
    $list = $statement-> fetchAll();
    return $list;
  }

}

?>
