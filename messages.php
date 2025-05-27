










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
    }
    else{
        echo "Błędny login lub hasło";
    }
}
mysqli_close($conn);
?>