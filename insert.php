<?php
include "db-connection.php";
if(isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message']))
{
    $name = $_POST['name'];
    $message = $_POST['message'];
    $mail = $_POST['mail'];

    $sql = mysqli_query($conn, "INSERT INTO wiadomosci(imie, email, tekst) VALUES ('$name','$mail','$message')");

    if(!$sql)
    {
        printf("Wystąpił błąd; %s\n", mysqli_error($link));
    }
    else
    {
        echo "Dane zostały dodane do bazy danych";
        exit();
    }
}else{
    echo "Brak danych w formularzu";
}
mysqli_close($conn);
?>