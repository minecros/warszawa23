<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/logowanie.css">
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
                <li><label><a href="index.php"><img src="grafika/logo.png" width="250px" ></a></label></li>
                <li><a href="index.php"><i class="material-icons">work</i><br>PRACA</a></li>
                <li><a href="index.php"><i class="material-icons">motorcycle</i><br>ANONSE</a></li>
                <li><a href="index.php"><i class="material-icons">school</i><br>SZKOŁY</a></li>
                <li><a href="index.php"><i class="material-icons">fitness_center</i><br>SIŁOWNIE</a></li>
                <li><a href="index.php"><i class="material-icons">filter</i><br>GALERIE</a></li>
                <li><a href="index.php"><i class="material-icons">insert_comment</i><br>FORUM</a></li>
                <li><a href="logowanie.php" style="color: #0277bd"><i class="material-icons">people</i><br>Twoja W23</a></li>
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

    <div style="height:600px; text-align:center;">
    <?php
        session_start();
    
        if(isset($_SESSION['login'])){
            
            //gdy uzytkownik jest juz zalogowany
        
            echo 'Witaj '.$_SESSION['login'].'<br>';
            ?>
    <form name="wyloguj" method="post">
    <input type="submit" value="Wyloguj" name="wyloguj">
    </form>
    </div>
    
    <?php
            if(isset($_POST['wyloguj'])){
                
                unset($_SESSION['login']);
                header("Location: logowanie.php");
                
            }
            
        }else{
            
            //gdy uzytkownik nie jest jeszcze zalogowany
            ?>

    <form id="logowanie" name="logowanie" action="skrypty/logowanie_skrypt.php" method="post">

        <input type="text" placeholder="login" name="login"><br>
        <input type="password" placeholder="haslo" name="haslo"><br>
        <input type="submit" value="Zaloguj"><br>
        
        <a href="rejestracja.php" id="czykonto">Nie masz konta?</a>



    </form>
    
    



    <?php
        }


    if(isset($_SESSION['udana_rejestracja'])){
        
            echo '<div id="komunikat">'.$_SESSION['udana_rejestracja'].'</div>';
            unset($_SESSION['udana_rejestracja']);
    }
    
    ?>



    <footer>
        <img src="grafika/logo.png" width="250px" >

    </footer>
</body>

</html>
