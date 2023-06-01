<DOCTYPE! HTML>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="loginform.css">
    </head>
    <body>
    <?php
    error_reporting(0);
    try{
    include('connection.php');
    $ID = $_GET["ID"];
    $sql = "select * from products where id=".$ID.";";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)){
    echo "<div id = 'frm'> 	
        <h1>Edycja produktu</h1>  
        <form name='f1' action = 'setProduct.php' onsubmit = 'return validation()' method = 'POST'> 
                <p>  
                    <label> Nazwa: </label>  
                    <input type = 'text' id ='name' name  = 'name' value='".$row['Name']."' />  
                </p>  
                <p>  
                    <label> Cena: </label>  
                    <input type = 'text' id ='price' name  = 'price' value='".$row['Price']."' />  
                </p>
                <p>  
                    <label> Opis: </label>  
                    <input type = 'text' id ='desc' name  = 'desc' value='".$row['Description']."' />  
                </p>
                <p>  
                    <label> Obrazek: </label>  
                    <input type = 'text' id ='image' name  = 'image' value ='".$row['Image']."' />
                    <input type = 'number' id ='ID' name ='ID' value ='".$ID."' style = 'display: none;' />  
                </p>	
                <p>     
                    <center><input type =  'submit' id = 'btn' value = 'Edytuj' /> </center>
                </p>
            </form> 	
            </div>";}}catch(Error $e){
                        $ID = 0;
                    }
    ?>
    </body>
</html>