<?php   
    session_start();
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];
	$username = strtolower($username);
        $sql = "select * from users where Login = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    
        if($count == 1){  
            header("Location: http://localhost/Project3/index.php");
            setcookie('Login',$_POST['user'],time()+83600,'/');
            setcookie('Password',$_POST['pass'],time()+83600,'/');
			$_SESSION['Logged']=$_POST['user'];
        }  
        else{  
            echo "<p>Podano złe dane! Kliknij <a href='login.php'>tu<a> aby powrócić.</p>";
        }
		mysqli_close($con);		
?>  