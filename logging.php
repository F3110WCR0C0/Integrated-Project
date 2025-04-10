<?php
require_once "./etc/config.php";
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
        <h2>Login</h2>
        <form action="./dev/storeLogin.php" method="POST">
            <p>
                Email: 
                <input type="email" name="email" value="<?= old("email") ?>">
                <span class="error"><?= error("email") ?><span>

            </p>
            <p>
                Password: 
                <input type="password" name="password" value="<?= old("password") ?>">
                <span class="error"><?= error("password") ?><span>
            </p>

            <button type="submit">Login</button>
            <a href="./index.php">Cancel</a>
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