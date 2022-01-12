<?php
require_once 'database.php';


?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once 'head.php' ?>
    <title>zuzu</title>
</head>

<body>
    <header style="background: aquamarine">
        <h1>Yo en welkom bij zuzu!</h1>
    </header>
    <main class="container">
        <h2>Hier kan je bestellen</h2>
        <h4>vul hier je gegevens in en klik dan op de button om uw bestlling te bestellen</h4>
        <form method="post" action="next.php">
            <label>Naam</label>
            <input name="fname" type="text" value="" placeholder="Jan">
            <label>AchterNaam</label>
            <input name="lname" type="text" value="" placeholder="van der Graaf">
            <label>Address</label>
            <input name="address" type="text" value="" placeholder="weebplein 69">
            <label>Postcode</label>
            <input name="postcode" type="text" value="" placeholder="1234AB">
            <label>Stad</label>
            <input name="stad" type="text" value="" placeholder="Hirosjima">
            <button name="submit" type="submit">volgende stap</button>
        </form>
        <?php 
        if (isset($_POST['submit'])) {
            if(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['address']) && !empty($_POST['postcode']) && !empty('stad')){
                $fname = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
                $lname = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
                $adres = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
                $zipcode = filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING);
                $city = filter_input(INPUT_POST, 'stad', FILTER_SANITIZE_STRING);

                makeUser($fname, $lname, $adres, $zipcode, $city);
            }
        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </main>
    <footer>

    </footer>

</body>

</html>