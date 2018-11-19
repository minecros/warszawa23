<?php
    
session_start();
require_once "polaczenie.php";

$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);

if($polaczenie->connect_errno!=0){
    
    //jesli nie udalo sie polaczyc z baza wyswietli blad
    echo "Error ".$polaczenie->connect_errno;

}else{
    
    //gdy udalo sie nawiazac polaczenie z baza
    
    $login = $_POST['login'];
    $passwd_hash = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
    
    $zapytanie_sql = 'SELECT login from uzytkownicy where login="'.$login.'" and haslo="'.$passwd_hash.'"';
    
    if($rezultat = @$polaczenie->query($zapytanie_sql) == true){
        
        echo $zapytanie_sql;
        echo $rezultat;
        
        
        
        if($rezultat == 1){
            
            
            $_SESSION['login'] = $login;
            $polaczenie->close();
            header('Location: ../logowanie.php');
            
        }else{
            //nie udalo sie zalogowac
            
        }
    }
    
    $polaczenie->close();
    header("logowanie.php");
}



?>
