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
        <h1>Logowanie</h1>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> Login: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Hasło: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <center><input type =  "submit" id = "btn" value = "Zaloguj" /> </center>
            </p>
        </form> 
        Nie posiadasz jeszcze konta?&nbsp;<a href="register.php">Zarejestruj się</a><br>
        Zapomniałes hasła ?&nbsp;<a href="lostpasswd.php">Kliknij tutaj</a>		
    </div> 
	<script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Pole loginu i hasła są puste!");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Pole login jest puste");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Pole hasła jest puste!");  
                    return false;  
                    }  
                }                             
            }  
        </script>  

    </body>
</html>