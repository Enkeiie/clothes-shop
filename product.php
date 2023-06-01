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
        <img id="banner" src="banner.jpg"></img>
        <div id="menu">
            <ul>
                <a href="index.php"><li id="home">Ciucholandia.pl - sklep z odzieżą</li></a>
                <?php
                    if(isset($_SESSION['Logged']))
                    {
                        echo"<a href='panel.php'><li>".$_SESSION['Logged']."</li></a>";
                    }else{
                        echo"<a href='login.php'><li>Zaloguj</li></a>";
                    }
                ?>
                <a href="basket.php"><li>Koszyk</li></a>
            </ul>
        </div>
        <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content:center; width: 100%; margin-top: 50px">
            <?php
                error_reporting(0);
                try{
                include('connection.php');
                $ID = $_GET["ID"];
                $sql = "select * from products where id=".$ID.";";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<div class='display'>
                    <img class='gallery_display' src='".$row['Image']."'></div>
                    <div class='display' style='height: fit-content;'>
                    <h1 style='font-size: 48pt;'>".$row['Name']."</h1></p></center>
                    <center><div style='display: flex; flex-direction: row; flex-wrap: wrap; justify-content:center'>
                        <p style = 'width: 50%; float:left;'>Opis</p><p style = 'width: 50%; float:left;'>Zakup</p>
                        <div class='desc'>".$row['Description']."</div>
                        <div style='margin-left: 10px; width: 45%;'><form><span style='font-size: 12pt;'>".$row['Price']."zł</span>
                        <input type='number' style='width: 50px; margin-right: 10px; margin-left: 10px;'></input><button type='submit'>Dodaj do koszyka</button></form></div>
                    </div></center>
                    <br></div></a>"; }
                }catch(Error $e){
                    $ID = 0;
                }
            ?>
        </div>
    </body>
</html>