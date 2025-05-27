<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<section>
<?php

include "db-connection.php"

if(isset($_POST['login'], $_POST['haslo'])){
    $username=$_POST['login'];
    $password=$_POST['haslo'];

    $username=stripcslashes($username);
    $password=stripcslashes($password);

    $sql="SELECT * FROM uzytkownicy where login='$username' and haslo='$password'";
    $result=mysqli_query($conn, $sql);
    $count=mysqli_num_rows($result);

    if($count==1){
        $_SESSION["name"]=$username;
        echo "Jesteś zalogowany/a";
    }else{
        echo "Błędny login lub hasło";
    }
}
mysqli_close($conn);
?>
</section>