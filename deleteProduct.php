<?php      
	session_start();
    include('connection.php');  ;
    $ID = $_GET['ID'];
	$sql = "DELETE FROM products WHERE id=$ID;";
	if (mysqli_query($con, $sql)) {
	header("Location: http://localhost/Project3/w_panel.php");
	} else {
	echo "<p>Operacja się nie powiodła! Kliknij <a href='w_panel.php'>tu<a> aby powrócić.</p>";
	}
	mysqli_close($con);
?>