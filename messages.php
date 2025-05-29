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





<?php

    include "db_connection.php";

    if(isset($_SESSION["name"])){
        $sql="SELECT id, imie, email, tekst FROM wiadomosci";
        $result=mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
                echo "id: ".$row["id"]. " Name: ".$row["imie"]. " Surname: ".$row["email"]. " Text: ".$row["tekst"]."<br>";
            }
        }else{
            echo "Brak danych";
        }
    }