<?php
require_once "../etc/config.php";


///////////////////////////////////////////////////////////////////////////////////////////
// This is old data 

try {
    // $stories = Story::findAll();
    // $stories = Story::findAll($options = array('limit' => 2));
    // $stories = Story::findAll($options = array('limit' => 2, 'offset' => 2));

    // $authorId = 7;
    // $stories = Story::findByAuthor($authorId);
    // $stories = Story::findByAuthor($authorId, $options = array('limit' => 3));
    // $stories = Story::findByAuthor($authorId, $options = array('limit' => 3, 'offset' => 2));

    // $categoryId = 4;
    // $stories = Story::findByCategory($categoryId);
    // $stories = Story::findByCategory($categoryId, $options = array('limit' => 3));
    // $stories = Story::findByCategory($categoryId, $options = array('limit' => 3, 'offset' => 2));

    $locationId = 8;
    // $stories = Story::findByLocation($locationId);
    // $stories = Story::findByLocation($locationId, $options = array('limit' => 3));
    $largeStories = Story::find("SELECT * FROM stories", [], $options = array('limit' => 2, 'offset' => 2));
    $mediumStories = Story::find("SELECT * FROM stories", [], $options = array('limit' => 6, 'offset' => 2));

    $smallStories = Story::find("SELECT * FROM stories", [], $options = array('limit' => 5, 'offset' => 2));

    $largeStories2 = Story::find("SELECT * FROM stories", [], $options = array('limit' => 2, 'offset' => 2));
    $mediumStories2 = Story::find("SELECT * FROM stories", [], $options = array('limit' => 6, 'offset' => 2));
}

catch (Exception $e) {
    echo $e->getMessage();
    exit();
}

?>
<html>
    <head>
        <title>Stories</title>
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

        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <!-- New Data -->
        <?php require_once "./etc/flash_message.php"; ?>
        <!-- <h1>Stories: <?= $category->name ?></h1> -->
        <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <section class="header">
        <div class="container">
            <div class="width-15">
                <div class="webIcon">
                    <i class="fa-solid fa-newspaper"></i>
                    <h1>Game Scoop</h1>
                </div>
                <div class="topButtons">
                    <ul>
                        <li>
                            <button>
                                <a href="./index.php"><h1>Log Out</h1></a>
                            </button>
                            <button>
                                <a href="./create.php"><h1>Create +</h1></a>
                            </button>
                            <button>
                                <h1>Download App</h1><i class="fa-solid fa-download"></i>
                            </button>
                            <button>
                                <h1>Language</h1><i class="fa-solid fa-chevron-down"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section-1">

        <div class="sectionTitle">
            <div class="container">
            <?php require_once "./etc/navbar.php"; ?>
                <div class="width-15">
                    <h1>RECOMMENDED</h1>
                </div>
        </div>
            <!-- Large Box (Currently Working)-->
        <div class="container">
            <div class="width-6">
            <?php foreach ($largeStories as $s) { ?>
                <div class="largeBoxs">
                    <div class="alignment">
                        <div class="largeBox option-1">
                            <button class="category"><?=$s->getCategory()?></button>
                        </div>
                        <a href="#">
                            <h1><?= $s->headline ?>
                            </h1>
                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                            <a href="#"><i class="fa-solid fa-message"></i></a>
                        </div>
                        <a href="#">
                            <p><?=$s->article?></p>
                        </a>
                        <a href="#"><button>Read more</button></a>
                    </div>
                    </div>  
            <?php } ?>
            </div>
        </div>

        <!-- Medium Boxs -->
        <div class="container">
            <div class="width-6">
            <?php foreach ($mediumStories as $s) { ?>
                <div class="largeBoxs">
                    <div class="alignment">
                        <div class="largeBox option-1">
                            <button class="category"><?=$s->getCategory()?></button>
                        </div>
                        <a href="#">
                            <h1><?= $s->headline ?>
                            </h1>
                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                            <a href="#"><i class="fa-solid fa-message"></i></a>
                        </div>
                        <a href="#">
                            <p><?=$s->article?></p>
                        </a>
                        <a href="#"><button>Read more</button></a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>


    <section class="midSection-1">
        <div class="sectionTitle">
            <div class="container">
                <div class="width-15">
                    <h1>FEATURED</h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="width-3">
            <?php foreach ($mediumStories as $s) { ?>
                <div class="smallBoxs">
                    <div class="alignment">
                        <div class="smallBox option-1">
                            <button class="category"><?=$s->getCategory()?></button>
                        </div>
                        <a href="#">
                            <h1><?= $s->headline ?></h1>
                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                        </div>
                        <div class="interaction">
                            <a href="#"><button>Read more</button></a>
                            <div>
                                <a href="#"><i class="fa-solid fa-message"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

    <section class="section-2">
        <div class="sectionTitle">
            <div class="container">
                <div class="width-15">
                    <h1>POPULAR</h1>
                </div>
        </div>

        <!-- Large Box -->
        <div class="container">
            <div class="width-6">
            <?php foreach ($largeStories2 as $s) { ?>
                <div class="largeBoxs">
                    <div class="alignment">
                        <div class="largeBox option-1">
                            <button class="category"><?=$s->getCategory()?></button>
                        </div>
                        <a href="#">
                            <h1><?= $s->headline ?>
                            </h1>
                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                            <a href="#"><i class="fa-solid fa-message"></i></a>
                        </div>
                        <a href="#">
                            <p><?=$s->article?></p>
                        </a>
                        <a href="#"><button>Read more</button></a>
                    </div>
                    </div>  
            <?php } ?>
            </div>
        </div>

        <!-- Medium Boxs -->
        <div class="container">
            <div class="width-6">
            <?php foreach ($mediumStories2 as $s) { ?>
                <div class="largeBoxs">
                    <div class="alignment">
                        <div class="largeBox option-1">
                            <button class="category"><?=$s->getCategory()?></button>
                        </div>
                        <a href="#">
                            <h1><?= $s->headline ?>
                            </h1>
                        </a>
                        <div class="information">
                            <a href="#">
                                <h2><i><?= Author::findById($s->author_id)->first_name . " " . Author::findById($s->author_id)->last_name ?><div class="blue"> - <?= $s->getFormattedDate($s->created_at) ?></div></i>
                                </h2>
                            </a>
                            <a href="#"><i class="fa-solid fa-message"></i></a>
                        </div>
                        <a href="#">
                            <p><?=$s->article?></p>
                        </a>
                        <a href="#"><button>Read more</button></a>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </section>

    <section class="footer">
        <div class="container">
            <div class="width-15">
                <div class="footerIcon">
                    <i class="fa-solid fa-newspaper"></i>
                    <p>Game Scoop</p>
                </div>
                <div class="footerContent">
                    <p>© 2025 News. All rights reserved. All trademarks are property of their respective
                        owners in the US and other countries.</p>
                </div>
                <ul>
                    <li>
                        <button>About</button>
                        <h1>|</h1>
                        <button>Jobs</button>
                        <h1>|</h1>
                        <button>Support</button>
                        <h1>|</h1>
                        <button>Merch</button>
                        <h1>|</h1>
                        <button><i class="fa-brands fa-facebook-f"></i> News</button>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </body>
</html>