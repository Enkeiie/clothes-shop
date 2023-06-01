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
        <?php
        error_reporting(0);
        try{
            $SID=$_GET['SID'];
            if($SID==-1)
            {
                session_destroy();
                header("Location: http://localhost/Project3/index.php");
            }
        }catch(Error $e){
            $SID = 0;
        }
        ?>
        <img id="banner" src="banner.jpg"></img>
        <div id="menu">
            <ul>
                <a href="#"><li id="home">Ciucholandia.pl - sklep z odzieżą</li></a>
                <?php
                    if(isset($_SESSION["Logged"]))
                    {
                        echo"<a href='panel.php'><li>".$_SESSION["Logged"]."</li></a>";
                    }else{
                        echo"<a href='login.php'><li>Zaloguj</li></a>";
                    }
                ?>
                <a href="basket.php"><li>Koszyk</li></a>
            </ul>
        </div>
			<div class="tmp" style="width:15%; float: left; height: 100%;"></div>
            <div style="display: flex; flex-direction: row; flex-wrap: wrap; justify-content: space-evenly; width: 70%; margin-top: 50px">
            <?php
                include('connection.php');
                $sql = "select * from products";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_array($result)){
                    echo "<a href='product.php?ID=".$row['id']."'><div class='product'>
                    <img class='gallery' src='".$row['Image']."'>
                    <center><p>".$row['Name']."<br>".$row['Price']."zł</p></center>
                    </div></a>"; }
            ?>
            </div>
        </div>
    </body>
</html>