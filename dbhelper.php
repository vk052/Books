<?php
class DBHelper {
  // specify your own database credentials
  private $host = "db709858490.db.1and1.com";
  private $database = "dbo709858490";
  private $user = "db709858490";
  private $password = "Svoli1990";
  public  $conn = false;
  // get the database connection
  public function __construct(){
      $this->conn = mysqli_connect($this->host, $this->user, $this->password)
        or die("Connection error " . mysqli_error());
      mysqli_select_db($this->conn, $this->database);
  }
  public function query($sql){
    $result = mysqli_query($this->conn, $sql);
    if (! $result) {
        die(mysql_errror());
    }
    return $result;
  }
}
?>