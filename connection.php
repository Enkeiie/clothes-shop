<?php
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "templateshop";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Błąd!: ". mysqli_connect_error());  
    }  
?> 