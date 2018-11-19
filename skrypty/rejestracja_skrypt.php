<?php

session_start();
require_once "polaczenie.php";


$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0){
    
    //nie udalo sie nawiazac polaczenia z baza
   // echo "Error".$polaczenie->connect_errno;
    echo "nie udalo sie nawiazac polaczenia z baza";
        
}else{
    
    //udalo sie nawiazac polaczenie z baza
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];
    $email = $_POST['email'];
    $check = $_POST['regulamin'];
    
  /*  if(isset($email)){
        
        //flaga poprawnosci
        $czyok = true;
        
        
        //sprawdzenie poprawnosci loginu
        if(strlen($login) < 3 || strlen($login) > 20){
            $czyok = false;
            $_SESSION['e_login'] = "Nazwa uzytkownika musi posiadać od 3 do 20 znaków";
            header("Location: ../rejestracja.php");
        }
        if(ctype_alnum($login) == false){
            $czyok = false;
            $_SESSION['e_login'] = "Login może składać się tylko z liter i cyfr";
            header("Location: ../rejestracja.php");
        }
        
        
        //sprawdzenie poprawnosci adresu email
        $emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
        if((filter_var($emailB, FILTER_VALIDATE_EMAIL) == false) || ($emailB !=$email)){
            
            $czyok = false;
            $_SESSION['e_email'] = "Podaj poprawny adres email";
            header("Location: ../rejestracja.php");
        }
        
        
        //sprawdzenie poprawnosci hasla
        if((strlen($haslo1) < 8) || strlen($haslo2) > 20){
            $czyok = false;
            $_SESSION['e_haslo'] = "Hasło musi posiadać od 8 do 20 znaków";
            header("Location: ../rejestracja.php");
        }
        if($haslo1 != $haslo2){
            $czyok = false;
            $_SESSION['e_haslo'] = "Podane hasła nie są identyczne";
            header("Location: ../rejestracja.php");
        }
        
        
        
        
        //sprawdzenie akceptacji regulaminu
        if(!isset($check)){
            $czyok = false;
            $_SESSION['e_check'] = "Musisz zaakceptować regulamin";
            header("Location: ../rejestracja.php");
        }
        
        
        //udana walidacja, mozemy dodac konto uzytkownika
        if($czyok == true){*/
            
            if($polaczenie->connect_errno!=0){
                echo "Error".$polaczenie->connect_errno;
            }else{
                
                $zap_czyistnieje = 'select login,email from uzytkownicy where login="'.$login.'" or email="'.$email.'"';
                echo $zap_czyistnieje;
                echo 1;
                
                if($rezultat = $polaczenie->query($zap_czyistnieje)){
                    
                    
                    if($rezultat->num_rows > 0){
                        
                        
                       $_SESSION['blad'] = "Istnieje użytkownik o podanym adresie email lub loginie";
                        header('Location: ../logowanie.php');
                        
                    }else{
                        
                        
                        $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
                        
                        $zap_rejestracja = 'insert into uzytkownicy(login,haslo,email) values ("'.$login.'","'.$haslo_hash.'","'.$email.'")';
                        
                        
                        //udalo sie dodac dane do bazy
                        if($polaczenie->query($zap_rejestracja)){
                            
                            $polaczenie->close();
                            $_SESSION['udana_rejestracja'] = "Zaloguj się aby dokończyć proces rejestracji";
                            
                            header('Location: ../logowanie.php');
                            
                        }else{
                            //gdy dodawanie uzytkownoka nie powiodlo sie
                            $polaczenie->close();
                            $_SESSION['blad_rejestracji'] = "dodawanie uzytkonika nie powiodlo sie";
                            header('Location: ../logowanie.php');
                        }
                        
                    }
                }
                    
            }
            
        }
        
        
    //}
//}


?>