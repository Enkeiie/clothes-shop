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
    <div id = "frm"> 	
        <h1>Rejestracja</h1>  
		Posiadasz już konto?&nbsp;<a href="login.php">Zaloguj się</a>
        <form name="f1" action = "registration.php" onsubmit = "return validation()" method = "POST"> 
 
            <p>  
                <label> Login: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Hasło: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>
			<p>  
                <label> Powtórz hasło: </label>  
                <input type = "password" id ="pass2" name  = "pass2" />  
            </p>
            <p>  
                <label> Email: </label>  
                <input type = "password" id ="mail" name  = "mail" />  
            </p>
			<p>  
                <input type = "checkbox" id ="check" name  = "check" /> 
                <label style="display: initial;"> Akceptuje warunki korzystania z sklepu </label>  				
            </p>	
            <p>     
                <center><input type =  "submit" id = "btn" value = "Rejestruj" /> </center>
            </p>
        </form> 	
    </div> 
    </body>
</html>