<?php      
	session_start();
    include('connection.php');  
    $username = $_POST['user'];
	$username = strtolower($username);	
    $password = $_POST['pass'];
	$password2 = $_POST['pass2'];
	$mail = $_POST['mail'];
	$mail = strtolower($mail);
	$acc = $_POST['check'];
	if ($password == $password2 && $acc == true)
	{
		$sql2 = "select * from users where Login = '$username';";  
        $result = mysqli_query($con, $sql2);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
		$sql3 = "select * from users where Email = '$mail';";  
        $result2 = mysqli_query($con, $sql3);  
        $row2 = mysqli_fetch_array($result2, MYSQLI_ASSOC);  
        $count2 = mysqli_num_rows($result2);   
        if($count == 0 && $count2 == 0)
		{
		$sql = "INSERT INTO Users VALUES('$username', '$password', '$mail')";
		if (mysqli_query($con, $sql)) {
		header("Location: http://localhost/Project3/login.php");
		}} else {
			echo "<p>Taki użytkownik już istnieje! Kliknij <a href='login.php'>tu<a> aby powrócić.</p>";
		}
	mysqli_close($con);
	}
	else
	{
		echo "<p>Formularz został wypełniony niepoprawnie! Kliknij <a href='login.php'>tu<a> aby powrócić.</p>";
	}
?>