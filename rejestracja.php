<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/rejestracja.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Warszawa23.pl</title>
    <link rel="icon" href="grafika/icon.png" type="image/gif">
</head>

<body>
    <header>
        <!-- Tu zrobić logo  -->


        <nav>


            <ul class="menu">
                <li><label><a href="index.php"><i class="material-icons">work</i><br>WARSZAWA23</a></label></li>
                <li><a href="index.php"><i class="material-icons">work</i><br>PRACA</a></li>
                <li><a href="index.php"><i class="material-icons">motorcycle</i><br>ANONSE</a></li>
                <li><a href="index.php"><i class="material-icons">school</i><br>SZKOŁY</a></li>
                <li><a href="index.php"><i class="material-icons">fitness_center</i><br>SIŁOWNIE</a></li>
                <li><a href="index.php"><i class="material-icons">filter</i><br>GALERIE</a></li>
                <li><a href="index.php"><i class="material-icons">insert_comment</i><br>FORUM</a></li>
                <li><a href="rejestracja.php" style="color: #0277bd"><i class="material-icons">people</i><br>Twoja W23</a></li>
            </ul>
        </nav>
    </header>
    <div id="container-informator">
        <ul class="informator-kategorie">
            <li>INFORMATOR:</li>
            <li><a href="">KAMERY</a></li>
            <li><a href="">POGODA</a></li>
            <li><a href="">SAMORZĄD</a></li>
            <li><a href="">PIZZA</a></li> 
            <li><a href="">DANIA</a></li>
            <li><a href="">MKS</a></li>
            <li><a href="">BUSY</a></li>
            <li><a href="">PKP</a></li>
            <li><a href="">LODOWISKO</a></li>
            <li><a href="">POWIETRZE</a></li>
        </ul>
        <hr>
    </div>

    <form id="logowanie" name="logowanie" method="post" action="skrypty/rejestracja_skrypt.php">
        
        <input type="text" placeholder="login" name="login">
        <input type="email" placeholder="email" name="email">
        <input type="password" placeholder="haslo" name="haslo1">
        <input type="password" placeholder="powtórz hasło" name="haslo2">
        <label><input type="checkbox" name="regulamin"> Akceptujesz regulamin? </label>
        <input type="submit" value="Utwórz konto">
        
        
    
    </form>

    

    <footer>
        <h2>WARSZAWA23.PL</h2>

    </footer>
</body>

</html>
