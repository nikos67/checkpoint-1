<?php
// j'intègre ma page de configuration base de donnée
include '../config/db.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/book.css">
    <title>Checkpoint PHP 1</title>
</head>
<body>

<?php include 'header.php'; ?>

<main class="container">

    <section class="desktop">

        <img src="image/whisky.png" alt="a whisky glass" class="whisky"/>
        <img src="image/empty_whisky.png" alt="an empty whisky glass" class="empty-whisky"/>


        <div class="pages">

            <div class="page leftpage">
                Add a bribe <br>
                <!-- TODO : Form -->
                <?php include'../src/bribe/add.php' ?>
            </div>

            <div class="page rightpage">
                <!-- TODO : Display bribes and total paiement -->
                <?php include'../src/bribe/add2.php' ?>
            </div>
            </div>

        <img src="image/inkpen.png" alt="an ink pen" class="inkpen"/>
    </section>
</main>
</body>
</html>
