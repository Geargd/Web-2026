<?php 
include 'data.php';
$postId = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $postId?></title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="main-container">
        <?php include 'sidebar.php'; ?>
        <div class="container">
            <header></header>
            <?php
            foreach($posts as $post) {
                if ($post['id'] == $postId){
                    include 'post_preview.php';
                    break;
                }
            }
            ?>
        </div>
    </div>
</body>
</html>