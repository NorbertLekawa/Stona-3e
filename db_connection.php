<?php
session_start();
$DATABASE_HOST = "localhost";
$DATABASE_USER = "admin6";
$DATABASE_PASS = "admin6";
$DATABASE_NAME = "e3kontakt";
$conn=mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if (mysqli_connect_errno()){
    exit("Nieudana próba połączenia z bazą danych: ".mysqli_connect_error());
}