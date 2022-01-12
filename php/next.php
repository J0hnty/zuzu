<?php
require 'user.php';
require 'database.php';
require 'Sushi.php';

if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    //moet weer uit commentaar
    //makeUser();
}
$sushi = getSushis();
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <?php include 'head.php'; ?>
    <title>page2</title>
</head>
<body>
    <div class="container">
        <header>
            <h2>Hallo <?php //$fname ?></h2>
        </header>
        <main>
        <div class="row">
            <?php foreach ($sushi as $sushi):?>
                <?php $i?>
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <img class="card-img" src="../img/<?= $sushi['picture']?>">
                            <div class="card-title"><?= $sushi['name']?></div>
                            <div class="card-title"><?= $sushi['price']?></div>
                            <div class="card-title"><?= $sushi['amount']?></div>
                            <form method="post">
                                <input class="invis" name="id" type="text" value="<?=$sushi['id']?>">
                                <button name="add" value="<?= $sushi['name']?>" type="submit">add</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="col-sm-4">
                <button type="button"><a href="overview.php">overview</a></button>
                <?php
                $amount = 0; 
                if (isset($_POST['add'])) {
                    $amount++;
                    updateStock($amount, $_POST['add']);
                    // $_SESSION['items'][$amount] = array('product' => $_POST['add']);
                    var_dump($_POST['id']);
                }
                ?>
            </div>
        </div>
        </main>
    </div>
</body>
</html>

