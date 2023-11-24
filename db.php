<?php


$conn = mysqli_connect('localhost','root','','test') or die('connection failed');;



    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

   
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
    }
    elseif(empty($name))
    {
        echo  "<h1>name is required</h1>";

    }
    elseif(!preg_match("/^[a-zA-Z ]*$/" , $name))
    {
        echo  "only letters and whitespaces are allowed";
    }

    elseif(empty($email))
    {
        echo  "Email is required";
    }
    elseif(!filter_var($email , FILTER_VALIDATE_EMAIL))
    {
        echo  "Invald email format";
    }
    elseif(empty($password))
    {
        echo "Password is required";
    }
    elseif(strlen($password) < 6)
    {
        echo  "Password Length should be greater than 6.";
    }
    elseif(empty($username))
    {
        echo  "Username is required";
    }

    else {
		$stmt = $conn->prepare("insert into user(name, username, password, email) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name,  $username, $password, $email);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}