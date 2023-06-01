<?php      
	session_start();
    include('connection.php');  
    $name = $_POST['name'];
	$cost = $_POST['price'];
	$image = $_POST['image'];
    $desc = $_POST['desc'];
	$sql = "INSERT INTO products VALUES(null,'$name','$cost','$desc','$image')";
	if (mysqli_query($con, $sql)) {
	header("Location: http://localhost/Project3/w_panel.php");
	} else {
	echo "<p>Operacja się nie powiodła! Kliknij <a href='w_panel.php'>tu<a> aby powrócić.</p>";
	}
	mysqli_close($con);
?>