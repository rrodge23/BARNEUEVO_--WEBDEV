<?php
    class database{

        var $conn;

        function __construct(){
            
            $this->conn = new mysqli("localhost","root","","webdev");

			if($this->conn->connect_error)
			{
				die("error: ". $this->conn->connect_error());
			}
        }
    }


    class modelUser extends database{

        public function registerUser($data){

                $con = $this->conn;
                $sql = "INSERT INTO userslogin(user,pass) VALUES('{$data['user']}','{$data['pass']}')";
                $result = $con->query($sql);
                if($result){    
                    return true;
                }else{
                    return false;
                }
        }
    }

    $user_model = new modelUser();
    $message="";
    
    if(isset($_POST['submit'])){
        if($_POST['pass'] == $_POST['repass']){
        $user = new modelUser();
        $result = $user->registerUser($_POST);
        if($result){
            $message="Success";
        }else{
            $message="Error";
        }
    }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <div>
        <h1><?=$message;?></h1>
    </div>
    <div>
    <?php
        if($message != ""){
            echo "Username:" . $_POST['user'] . "<br>";
            echo "Password:" . $_POST['pass'];
        }
    ?>
         
        
    </div>

</body>
</html>