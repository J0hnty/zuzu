<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include 'head.php';
        global $fname;
    ?>
    <title>overview</title>
</head>
<body>
    <?php
        session_start();
        var_dump($_SESSION['order']);
    
    ?>
    <div class="container">
        <header>
            <h2>Hier is het overzicht van de bestelling <?php //$fname['name']?></h2>
        </header>
        <main>

        </main>
        <footer>

        </footer>
    </div>
</body>
</html>