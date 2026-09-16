<?php include 'data.php' ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="main-container">
        <?php include 'sidebar.php'; ?>
        <div class="container">
            <header></header>

            <?php 
                foreach ($posts as $post) {
                    include 'post_preview.php';
                }
            ?>

        </div>
    </div>
</body>
</html>