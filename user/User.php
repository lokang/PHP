<?php
class User {

    public $conn;

    public function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "root";

        try {
            $this->conn = new PDO("mysql:host=$servername;dbname=php", $username, $password);
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        }
        catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function prepare($prepare){
        return $this->conn->prepare($prepare);
    }

    public function getAll(){
        $prepare = $this->prepare("SELECT * FROM user");
        $prepare->execute();
        return $prepare->fetchAll();
    }

    public function get($id){
        $prepare = $this->prepare("SELECT * FROM user WHERE id = ?");
        $prepare->execute([$id]);
        return $prepare->fetch();
    }

    public function Create($gender, $firstName, $lastName, $email, $password){
        $prepare = $this->prepare("INSERT INTO user(gender, firstName, lastName, email, password) VALUES (?, ?, ?, ?, ?)");
        $prepare->execute([$gender, $firstName, $lastName, $email, $password]);
    }

    public function update($gender, $firstName, $lastName, $email, $id){
        $prepare = $this->prepare("UPDATE user SET gender = ?, firstName = ?, lastName = ?, email = ? WHERE id = ?");
        $prepare->execute([$gender, $firstName, $lastName, $email, $id]);
    }

    public function destroy($id){
        $prepare = $this->prepare("DELETE FROM user WHERE id = ?");
        $prepare->execute([$id]);
    }
}
