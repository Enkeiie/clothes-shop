<DOCTYPE! HTML>
<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="pageStyles.css">
    </head>
    <body>
    <div id="menu">
            <ul>
                <a href="index.php?SID=-1"><li>Wyloguj</li></a>
            </ul>
    </div>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content:center; width: 100%; margin-top: 50px">
        <div class="display">
        <center>
            <table style="font-size: 18pt;">
                <tr>
                    <td><center>Miniatura</center></td>
                    <td><center>Nazwa</center></td>
                    <td><center>Cena</center></td>
                    <td colspan="2"><center>Akcje</center></td>
                </tr>
            <?php
                include('connection.php');
                $sql = "select * from products";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<tr style='text-align: left'>
                        <td><img class='list_display' src='".$row['Image']."'></td>
                        <td>".$row['Name']."</td>
                        <td>".$row['Price']."zł</td>
                        <td><center><a href='editProduct.php?ID=".$row['id']."'><button class='actionButton'>Edytuj</button></center></a></td>
                        <td><center><a href='deleteProduct.php?ID=".$row['id']."'><button class='actionButton'>Usuń</button></center></a></td>
                    </tr>"; }
            ?>
            </table>
        </center>
        </div>
            <div class="display" style="text-align: left; height: fit-content;">
            <form action = "addProduct.php" onsubmit = "return validation()" method = "POST" style="margin-left: 30px"> 
                <p>  
                    <label> Nazwa: </label>  
                    <input type = "text" id ="name" name  = "name" />  
                </p>  
                <p>  
                    <label> Cena: </label>  
                    <input type = "text" id ="price" name  = "price" />  
                </p>
                <p>  
                    <label> Opis: </label>  
                    <input type = "text" id ="desc" name  = "desc" />  
                </p>
                <p>  
                    <label> Obrazek: </label>  
                    <input type = "text" id ="image" name  = "image" />  
                </p>	
                <p>     
                    <center><input type =  "submit" id = "btn" value = "Dodaj produkt" /> </center>
                </p>
            </form>
            </div>
        </div>    
        </div>
    </body>
</html>