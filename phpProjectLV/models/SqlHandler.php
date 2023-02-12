<?php

Class SqlHandler implements DbHandler
{
  public $table;
  public $link;

  public function __construct()
  {
    $this->link = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  }

  public function setTable($table)
  {
    $this->table = $table;
  }
// -------------------------------insertion into DB
  public function insertNewUser($email,$password){
    $sql ="INSERT INTO `users`( `email`, `password`) VALUES ('$email','$password')";
    $this->link->query($sql);
  //  echo  "im here";
  return header("Loctaion:./index.php?view=login");
  exit;
  }

  public function insertNewProduct($fileName, $size, $content)
  {
    $sql = "INSERT INTO `products`( `name`, `size`, `content`) VALUES ('[$fileName]','[$size]','[$content]')";
    
    $this->link->query($sql);

  }
  
  public function makeNewOrder($userId,$downloadsCounter){
    $sql = "INSERT INTO `orders`( `userId`, `productId`, `downloadsCounter`) VALUES ('[$userId]','1','[$downloadsCounter]'";
    
    mysqli_query($this->link, $sql);
  }

// ----------------------update file name

public function updateFileName($id,$productNewName){
  $sql = "UPDATE `products` SET `name`='$productNewName' WHERE 'id'=$id";
    
  mysqli_query($this->link, $sql);
}





  // ----------------------------------select from DB

  public function selectRecord($email)
  {
    $query = "SELECT * FROM `$this->table` WHERE `email` = '$email'";
    return $this->selectData($query);
  }
public function selectOrder($userEmail){
  $query = "SELECT * FROM `$this->table` WHERE 'userId' = `(select id from users where email = '$userEmail')";
  return $this->selectData($query);
}

public function selectRecordById($id)
{
  $query = "SELECT * FROM `$this->table` WHERE `email` = '$id'";
  return $this->selectData($query);
}

  public function selectRecords()
  {
    $query = "SELECT * FROM $this->table";
    return $this->selectData($query);
  }

// --------------------------- select Query sent


  private function selectData($sql) 
  {
    $results = mysqli_query($this->link, $sql);
    $result = array();
    while($row = mysqli_fetch_array($results))
    {
      $result [] = $row;
    }
    if (count( $result) === 1) return  $result[0];
    else return  $result;
  
  }
// ----------------------------------- query sent 
}