<?php

function makeUser($fname, $lname, $adres, $zipcode, $city) {

    global $pdo;
    $query = $pdo->prepare("INSERT INTO users (fname, lname, adres, zipcode, city)
                                     VALUES ('$fname', '$lname', '$adres', '$zipcode', '$city')");

    var_dump($_POST);
    $query->execute();
    $_POST = [];
}

