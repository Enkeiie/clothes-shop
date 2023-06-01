<DOCTYPE! HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="pagestyle.css">
		<script>
			function1(name){
			document.getElementByName("name").style.display = 'none';
			}
		</script>
    </head>
    <body>
        <a href="index.php"><p style="text-align: left; font-size: 20pt; margin-left: 10%;">Kontynuuj zakupy</p></a>
        <div class="checkBox">
            <div id="prodList">
                <p style="text-align: center; display: block; border-bottom: 1px solid gray;">Lista produktów</p>
				<?php
                session_start();
                if(isset($_SESSION["prod1"])){
				echo "<p name='par_1' style='margin-left: 30px; display:inline;'> Spodnie do jogi | 19,99zł X ".$_SESSION["prod1"]."<input on_click='function1('par_1')' type='submit' name='delete1' value='usuń' style='float: right; margin-right: 30px;'></p>";
                }
				if(isset($_GET["delete1"])){
					unset($_SESSION["prod1"]);
					header('location:backet.php');
				}
				?>
            </div>
            <div id="prodCheck">
                <center>
                <p>Ilość przedmiotów: </p>
                <p>Dostawa: </p>
                <p>Suma: </p>
                <a href="checkout.php"><button type="submit" class="formsubmit" style="height: 80px;">Przejdź dalej</button></a><br><br></center>
            </div>
        </div>
    </body>
</html>