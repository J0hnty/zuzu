<?php

function getSushis() {
    global $pdo;

    $query = $pdo->prepare('SELECT * FROM `sushi`');
    $query->execute();

    $sushi = $query->fetchAll(PDO::FETCH_ASSOC);
    return $sushi;
}

function updateStock($order_amount, $name){
    global $pdo;
    $initial_value = 10;
    $query = $pdo->prepare("UPDATE `sushi` SET amount = '$initial_value' - '$order_amount' WHERE name = '$name'");
    $query->execute();
}