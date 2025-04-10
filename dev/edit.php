<?php
require_once "../etc/config.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
try {
    if ($_SERVER["REQUEST_METHOD"] !== "GET") {
        throw new Exception("Invalid request method");
    }
    if (!array_key_exists("id", $_GET)) {
        throw new Exception("Invalid request parameters");
    }
    $id = $_GET["id"];
    $Profile = Profile::findDataBaseID($id);
    if ($Profile === null) {
        throw new Exception("Profile not found");
    }
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Form</title>
        <style>
            .error { color: red; }
        </style>
    </head>
    <body>
        <h2>Edit Story</h2>
        <form action="./update.php" method="POST">
            <input type="hidden" name="id" value="<?= $Profile->id ?>">
            <p>
                Headline: 
                <input type="text" name="headline" value="<?= old("headline") ?>">
                <span class="error"><?= error("headline") ?><span>
            </p>

            <p>
                Short Headline: 
                <input type="text" name="short_headline" value="<?= old("short_headline") ?>">
                <span class="error"><?= error("short_headline") ?><span>
            </p>

            <p>
                Article: 
                <input type="text" name="article" value="<?= old("article") ?>">
                <span class="error"><?= error("article") ?><span>
            </p>

            <p>
                Short Article : 
                <input type="text" name="short_article" value="<?= old("short_article") ?>">
                <span class="error"><?= error("short_article") ?><span>
            </p>

            <p>
                Created At:
                <input type="date" name="created_at" value="<?= old("created_at") ?>">
                <span class="error"><?= error("created_at") ?><span>
            </p>
            <p>
                Updated At:
                <input type="date" name="updated_at" value="<?= old("updated_at") ?>">
                <span class="error"><?= error("updated_at") ?><span>
            </p>
            <p>
                <!-- EDIT DATA -->
                Category:

                <input type="radio" 
                       name="category_id" 
                       value="RPG"    
                       <?= chosen("category_id", "RPG")    ? "checked" : "" ?>
                >RPG

                <input type="radio" 
                       name="category_id" 
                       value="Shooter" 
                       <?= chosen("category_id", "Shooter") ? "checked" : "" ?>
                >Shooter

                <input type="radio" 
                       name="category_id" 
                       value="Fighting"    
                       <?= chosen("category_id", "Fighting")    ? "checked" : "" ?>
                >Fighting

                <input type="radio" 
                       name="category_id" 
                       value="MMORPG"    
                       <?= chosen("category_id", "MMORPG")    ? "checked" : "" ?>
                >MMORPG

                <input type="radio" 
                       name="category_id" 
                       value="Miscellaneous"    
                       <?= chosen("category_id", "Miscellaneous")    ? "checked" : "" ?>
                >Miscellaneous

                <input type="radio" 
                       name="category_id" 
                       value="Story"    
                       <?= chosen("category_id", "Story")    ? "checked" : "" ?>
                >Story

                <input type="radio" 
                       name="category_id" 
                       value="Life Simultor"    
                       <?= chosen("category_id", "Life Simultor")    ? "checked" : "" ?>
                >Life Simultor

                <input type="radio" 
                       name="category_id" 
                       value="Battle Royale"    
                       <?= chosen("category_id", "Battle Royale")    ? "checked" : "" ?>
                >Battle Royale
                <span class="error"><?= error("category_id") ?><span>    
            </p>

            <button type="submit">Update</button>
            <a href="../dev/index.php">Cancel</a>
        </form>
    </body>
</html>
<?php
if (array_key_exists("form-data", $_SESSION)) {
    unset($_SESSION["form-data"]);
}
if (array_key_exists("form-errors", $_SESSION)) {
    unset($_SESSION["form-errors"]);
}
?>