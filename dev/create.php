<?php
require_once "../etc/config.php";
/////////////////////////////////////////////////////////////////////////////////////////
// EDIT INFORMATION
/////////////////////////////////////////////////////////////////////////////////////////
if (session_status() === PHP_SESSION_NONE) {
    session_start();
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
        <h2>Create Story</h2>
        <form action="./store.php" method="POST">

            <p>
                Image: 
                <input type="text" placeHolder="Images/(insert).jpg" name="img_url" value="<?= old("img_url") ?>">
                <span class="error"><?= error("img_url") ?><span>
            </p>
            
            <p>
                Author:
                <input type="radio" 
                       name="author_id" 
                       value="1"    
                       <?= chosen("author_id", "Adam Bankhurst")    ? "checked" : "" ?>
                >Adam Bankhurst
            
                <input type="radio" 
                       name="author_id" 
                       value="2" 
                       <?= chosen("author_id", "Matthew Evans") ? "checked" : "" ?>
                >Matthew Evans

                <input type="radio" 
                       name="author_id" 
                       value="3"    
                       <?= chosen("author_id", "Eddie Mackuch")    ? "checked" : "" ?>
                >Eddie Mackuch

                <input type="radio" 
                       name="author_id" 
                       value="4"    
                       <?= chosen("author_id", "Brendan Hesey")    ? "checked" : "" ?>
                >Brendan Hesey

                <input type="radio" 
                       name="author_id" 
                       value="5"    
                       <?= chosen("author_id", "Darryn Bonthuys")    ? "checked" : "" ?>
                >Darryn Bonthuys

                <input type="radio" 
                       name="author_id" 
                       value="6"    
                       <?= chosen("author_id", "Evan Cambell")    ? "checked" : "" ?>
                >Evan Cambell   

                <input type="radio" 
                       name="author_id" 
                       value="7"    
                       <?= chosen("author_id", "Blair Marnell")    ? "checked" : "" ?>
                >Blair Marnell

                <input type="radio" 
                       name="author_id" 
                       value="8"    
                       <?= chosen("author_id", "Jason Rodriguez")    ? "checked" : "" ?>
                >Jason Rodriguez

                <input type="radio" 
                       name="author_id" 
                       value="9"    
                       <?= chosen("author_id", "Tomas Franzese")    ? "checked" : "" ?>
                >Tomas Franzese

                <input type="radio" 
                       name="author_id" 
                       value="10"    
                       <?= chosen("author_id", "Claire Lewis")    ? "checked" : "" ?>
                >Claire Lewis

                <input type="radio" 
                       name="author_id" 
                       value="11"    
                       <?= chosen("author_id", "Steve Petite")    ? "checked" : "" ?>
                >Steve Petite

                <input type="radio" 
                       name="author_id" 
                       value="12"    
                       <?= chosen("author_id", "Jordan Ramee")    ? "checked" : "" ?>
                >Jordan Ramee

                
                <input type="radio" 
                       name="author_id" 
                       value="13"    
                       <?= chosen("author_id", "Steven Wright")    ? "checked" : "" ?>
                >Steven Wright
                
                <span class="error"><?= error("location_id") ?><span>    
            </p>

            <p>
                Location:
                <input type="radio" 
                       name="location_id" 
                       value="1"    
                       <?= chosen("location_id", "Osaka")    ? "checked" : "" ?>
                >Osaka
            
                <input type="radio" 
                       name="location_id" 
                       value="2" 
                       <?= chosen("location_id", "Shenzhen") ? "checked" : "" ?>
                >Shenzhen

                <input type="radio" 
                       name="location_id" 
                       value="3"    
                       <?= chosen("location_id", "Stockholm")    ? "checked" : "" ?>
                >Stockholm

                <input type="radio" 
                       name="location_id" 
                       value="4"    
                       <?= chosen("location_id", "California")    ? "checked" : "" ?>
                >California

                <input type="radio" 
                       name="location_id" 
                       value="5"    
                       <?= chosen("location_id", "Washington")    ? "checked" : "" ?>
                >Washington

                <input type="radio" 
                       name="location_id" 
                       value="6"    
                       <?= chosen("location_id", "Alberta")    ? "checked" : "" ?>
                >Alberta   

                <input type="radio" 
                       name="location_id" 
                       value="7"    
                       <?= chosen("location_id", "Prague")    ? "checked" : "" ?>
                >Prague

                <input type="radio" 
                       name="location_id" 
                       value="8"    
                       <?= chosen("location_id", "Maryland")    ? "checked" : "" ?>
                >Maryland

                <input type="radio" 
                       name="location_id" 
                       value="8"    
                       <?= chosen("location_id", "Chicago")    ? "checked" : "" ?>
                >Chicago

                <input type="radio" 
                       name="location_id" 
                       value="8"    
                       <?= chosen("location_id", "Madison")    ? "checked" : "" ?>
                >Madison

                <input type="radio" 
                       name="location_id" 
                       value="8"    
                       <?= chosen("location_id", "North Carolina")    ? "checked" : "" ?>
                >North Carolina
                
                <span class="error"><?= error("location_id") ?><span>    
            </p>

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
                Short Article: 
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
                Category:
                <input type="radio" 
                       name="category_id" 
                       value="1"    
                       <?= chosen("category_id", "RPG")    ? "checked" : "" ?>
                >RPG
            
                <input type="radio" 
                       name="category_id" 
                       value="2" 
                       <?= chosen("category_id", "Shooter") ? "checked" : "" ?>
                >Shooter

                <input type="radio" 
                       name="category_id" 
                       value="3"    
                       <?= chosen("category_id", "Fighting")    ? "checked" : "" ?>
                >Fighting

                <input type="radio" 
                       name="category_id" 
                       value="4"    
                       <?= chosen("category_id", "MMORPG")    ? "checked" : "" ?>
                >MMORPG

                <input type="radio" 
                       name="category_id" 
                       value="5"    
                       <?= chosen("category_id", "Miscellaneous")    ? "checked" : "" ?>
                >Miscellaneous

                <input type="radio" 
                       name="category_id" 
                       value="6"    
                       <?= chosen("category_id", "Story")    ? "checked" : "" ?>
                >Story

                <input type="radio" 
                       name="category_id" 
                       value="7"    
                       <?= chosen("category_id", "Life Simultor")    ? "checked" : "" ?>
                >Life Simultor

                <input type="radio" 
                       name="category_id" 
                       value="8"    
                       <?= chosen("category_id", "Battle Royale")    ? "checked" : "" ?>
                >Battle Royale
                
                <span class="error"><?= error("category_id") ?><span>    
            </p>

            <!-- EDIT where submir brings you to -->
            <button type="submit">Store</button>
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