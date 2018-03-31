<?php
class Dao{
    private $host = "us-cdbr-iron-east-05.cleardb.net";
    private $db = "heroku_69febf880d332ff";
    private $user = "be06b20f27baf5";
    private $password = "5cca60d0";

private function getConnection (){
    try{
        $conn = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user, $this->password);
            return $conn;
    }catch (PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
}

public function getUser(){
        $conn =$this->getConnection();
        $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
        $records->bindValue(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        return $results;
    }
public function createUser(){
        $conn = $this->getConnection();
        $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
        $stmt = $conn->prepare($sql);
    
        $stmt->bindValue(':email', $_POST['email']);
        /*$stmt->bindValue(':password', password_hash($_POST['password'], PASSWORD_BCRYPT));    */
        $stmt->bindValue(':password', $_POST['password']);
        if($stmt->execute()):
            return $message= 'Successfully created a user. Please login to your new account.';
        else:
            return $message= 'Sorry, there was an issue creating your account :(';
        endif;
    }

    public function login(){
          $conn = $this->getConnection();
          $records= $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
          $records->bindValue(':email', $_POST['email']);
          $records->execute();
          $results= $records->fetch(PDO::FETCH_ASSOC);
          return $results;
    }
/*
    public function userExist(){
        $conn =$this->getConnection();
        $records = $conn->prepare('SELECT * FROM users WHERE email = :email');
        $records->bindValue(':email', $_SESSION['user_email']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
        if(isset($results)){
            return true;
        }else{
        return false;
        }
    }*/
    public function userExists($email){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT * FROM users WHERE email = '$email'";
        $user_data = mysqli_query($conn, $query);
        if(mysqli_num_rows($user_data) > 0){
            return true;
        }else{
            return null;
        }
    }
    public function regexEmail($email){
        $pattern = '/^(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){255,})(?!(?:(?:\\x22?\\x5C[\\x00-\\x7E]\\x22?)|(?:\\x22?[^\\x5C\\x22]\\x22?)){65,}@)(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22))(?:\\.(?:(?:[\\x21\\x23-\\x27\\x2A\\x2B\\x2D\\x2F-\\x39\\x3D\\x3F\\x5E-\\x7E]+)|(?:\\x22(?:[\\x01-\\x08\\x0B\\x0C\\x0E-\\x1F\\x21\\x23-\\x5B\\x5D-\\x7F]|(?:\\x5C[\\x00-\\x7F]))*\\x22)))*@(?:(?:(?!.*[^.]{64,})(?:(?:(?:xn--)?[a-z0-9]+(?:-+[a-z0-9]+)*\\.){1,126}){1,}(?:(?:[a-z][a-z0-9]*)|(?:(?:xn--)[a-z0-9]+))(?:-+[a-z0-9]+)*)|(?:\\[(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){7})|(?:(?!(?:.*[a-f0-9][:\\]]){7,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,5})?)))|(?:(?:IPv6:(?:(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){5}:)|(?:(?!(?:.*[a-f0-9]:){5,})(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3})?::(?:[a-f0-9]{1,4}(?::[a-f0-9]{1,4}){0,3}:)?)))?(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))(?:\\.(?:(?:25[0-5])|(?:2[0-4][0-9])|(?:1[0-9]{2})|(?:[1-9]?[0-9]))){3}))\\]))$/iD';
        if (preg_match($pattern, $email) === 1) {
            // emailaddress is valid
            return true;
        }else{
            return false;
        }
    }
}


