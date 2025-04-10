<?php
require_once "./etc/config.php";

try {
    if (!isset($_GET["id"])) {
        throw new Exception("Category ID not provided.");
    }
    $categoryId = $_GET["id"];
    $category = Category::findById($categoryId);
    if ($category == null) {
        throw new Exception("Category not found.");
    }
    // $stories = Story::findByCategory($categoryId);
    $stories = Story::findByCategory($categoryId, $options = array('limit' => 3));
    // $stories = Story::findByCategory($categoryId, $options = array('limit' => 3, 'offset' => 2));
}
catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>
<html>
    <head>
        <title>Stories: <?= $category->name ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/grid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/boxs/largeBoxs.css">
        <link rel="stylesheet" href="css/boxs/mediumBoxs.css">
        <link rel="stylesheet" href="css/boxs/smallBoxs.css">
        <link rel="stylesheet" href="css/sections/section-1.css">
        <link rel="stylesheet" href="css/sections/midSection-1.css">
        <link rel="stylesheet" href="css/sections/section-2.css">

    </head>
    <body>
        <?php require_once "./etc/navbar.php"; ?>
        <?php require_once "./etc/flash_message.php"; ?>
        <h1>Stories: <?= $category->name ?></h1>
        <div class="container">
            <div class="width-15">
                <div class="largeBoxs">
                <?php foreach ($stories as $s) { ?>
                    <div class="alignment">
                        <a href="#">
                            <h1><?= $s->headline ?>
                            </h1>
                            <a href="#"><i class="fa-solid fa-message"></i></a>

                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                        </div>
                        <a href="#">
                            <p><?=$s->article?></p>
                            <div class="information">
                                <i>location: <?= Location::findById($s->location_id)->name ?></i>
                                <i>Created at: <?= $s->created_at ?></i>
                                <i>Updated at: <?= $s->updated_at ?></i>
                            </div>
                        </a>
                    </div>
                <?php } ?>
                </div>  
            </div>

    </body>
</html>