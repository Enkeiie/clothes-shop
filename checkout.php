<DOCTYPE! php>
<php>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="pagestyle.css">
    </head>
    <body>
        <a href="basket.php"><p style="text-align: left; font-size: 20pt; margin-left: 10%;">Powróć</p></a>
        <div class="checkBox">
            <div id="prodList" style="text-align: justify;">
                <center><h1>Dane dostawy</h1></center>
                <span style="margin-left: 100px;">Imię<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <span style="margin-left: 100px;">Nazwisko<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <span style="margin-left: 100px;">Email<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <span style="margin-left: 100px;">Nr. Telefonu<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <center><h1>Metoda dostawy</h1>
                <input type="checkbox" style="margin-right: 15px;" class="delmethod"><span style="font-size: 30pt;">PayPro</span><input type="checkbox" class="delmethod"><span style="font-size: 30pt;">Przelewy24</span></center><br><br>
                <span style="margin-left: 100px;">Kraj<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <span style="margin-left: 100px;">Miasto<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br>
                <span style="margin-left: 100px;">Ulica<input type="text" style="margin-left: 30px;" class="inputforms"></span><br><br></center>
            </div>
            <div id="prodCheck" style="height: fit-content;">
                <center>
                <p>Ilość przedmiotów: </p>
                <p>Dostawa: </p>
                <p>Suma: </p>
                <a href="checkout.php"><button type="submit" class="formsubmit" style="height: 80px;">Dokonaj płatności</button></a><br><br></center>
            </div>
        </div>
    </body>
</php>