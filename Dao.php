<?php

class Dao {

  private $host = "us-cdbr-iron-east-04.cleardb.net";
  private $db = "heroku_e707007638085c8";
  private $user = "b6f3521fa8d456";
  private $pass = "ed34e7de";

  public function getConnection () {
    return
      new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
          $this->pass);
  }

	public function createUser($email, $username, $password){
		$con = $this->getConnection();
		$newQuery = "insert into user (email, username, password) values (:email, :username, :password)";
		$prep = $con->prepare($newQuery);
		$prep->bindParam(":email", $email);
		$prep->bindParam(":username", $username);
		$prep->bindParam(":password", $password);
		$prep->execute();
	}


	 public function createThread($title, $body){
                $con = $this->getConnection();
                $newQuery = "insert into forum (username, title, body, date_created) values (username, :title, :body, GETDATE())";
                $prep = $con->prepare($newQuery);
                $prep->bindParam(":title", $title);
                $prep->bindParam(":body", $body);
                $prep->execute();
        }
}

?>
