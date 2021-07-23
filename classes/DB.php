<?php
class DB{
  private $host="localhost";
  private $user="root";
  private $dbname="signupform";
  private $pw="";

  public function connect($name, $last, $email){
    try {
      $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
      $pdo = new PDO($dsn, $this->user, $this->pw);
      $sql = "INSERT INTO userinfo (name, last, email) VALUES (:name, :last, :email)";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['name'=> $name, 'last'=>$last, 'email' => $email]);
    } catch (PDOException $e) {
      echo "DB Connection Failed: " . $e->getMessage();
    }

  }
  

}
