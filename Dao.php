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
        $salt = "youhavebeensalted123$";
        $hashed = md5($_POST['password'].$salt);
        $stmt->bindValue(':password', $hashed);    
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
    public function verifyPassword($email, $pass){
        $conn =$this->getConnection();
        $records = $conn->prepare('SELECT password FROM users WHERE email = :email');
        $records->bindValue(':email', $email);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        if(md5($pass) == $results['password']){
            return true;
        }else{
            return false;
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
    public function getMortarInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM mortar WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $mortar = array($cost,$time);
        return $mortar;
    }
    public function getArcherTowerInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM archer_tower WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $archer = array($cost,$time);
        return $archer;
    }
    public function getCannonInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM cannon WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $cannon = array($cost,$time);
        return $cannon;
    }

    public function getWizTowerInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM wizard_tower WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $wiz = array($cost,$time);
        return $wiz;
    }

    public function getAirDefInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM air_defense WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $air_def = array($cost,$time);
        return $air_def;
    }
    public function getAirSweepInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM air_sweeper WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $air_sweep = array($cost,$time);
        return $air_sweep;
    }
    public function getHiddenTeslaInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM hidden_tesla WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $hid = array($cost,$time);
        return $hid;
    }
    public function getBombTowerInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM bomb_tower WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $bom_tow = array($cost,$time);
        return $bom_tow;
    }
    public function getXbowInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM xbow WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $xbow = array($cost,$time);
        return $xbow;
    }
    public function getInfernoTowerInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM inferno_tower WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $inferno = array($cost,$time);
        return $inferno;
    }
    public function getEagleArtilleryInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM eagle_art WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $eag_art = array($cost,$time);
        return $eag_art;
    }
    public function getBombsInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM bombs WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $bombs = array($cost,$time);
        return $bombs;
    }
    public function getGiantBombInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM giant_bomb WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $gia_bom = array($cost,$time);
        return $gia_bom;
    }
    public function getAirBombInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM air_bomb WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $air_bom = array($cost,$time);
        return $air_bom;
    }
    public function getSeekingMineInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM seeking_air_mine WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $air_mine = array($cost,$time);
        return $air_mine;
    }
    public function getSpringTrapInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM spring_trap WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $spring = array($cost,$time);
        return $spring;
    }
    public function getSkeletonTrapInfo($curLevel){
        $conn = mysqli_connect("us-cdbr-iron-east-05.cleardb.net","be06b20f27baf5","5cca60d0","heroku_69febf880d332ff");
        $query = "SELECT level,cost,time FROM skeleton_trap WHERE level > '$curLevel'";
        $user_data = mysqli_query($conn, $query);
        $cost = 0; $time = 0;
        while($result = mysqli_fetch_array($user_data)){
            $cost += $result[1];
            $time += $result[2];
        }
        $skel = array($cost,$time);
        return $skel;
    }
}


