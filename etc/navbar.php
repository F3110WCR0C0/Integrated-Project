<?php

try {
    $categories = Category::findAll();
}
catch (Exception $e) {
    echo $e->getMessage();
    exit();
}
?>
   <ul class="navbar width-15" style="display: flex; justify-content: space-between;">
    <li><a href="index.php">Home</a></li>
    <?php foreach ($categories as $c) { ?>
        <li><a href="category.php?id=<?= $c->id ?>"><?= $c->name ?></a></li>
    <?php } ?>
</ul>
