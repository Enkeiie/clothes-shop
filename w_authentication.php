<?php
    session_start();    
    include('connection.php');  
    $username = $_POST['user']; 
	$username = strtolower($username);	
    $password = $_POST['pass'];
        $sql = "select * from workers where Login = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);    
        if($count == 1){  
            header("Location: http://localhost/Project3/w_panel.php");
            setcookie('Login',$_POST['user'],time()+83600,'/');
            setcookie('Haslo',$_POST['pass'],time()+83600,'/');
        }  
        else{  
            echo "<p>Podano złe dane! Kliknij <a href='w_login.php'>tu<a> aby powrócić.</p>";
        }
		mysqli_close($con);		
?>  