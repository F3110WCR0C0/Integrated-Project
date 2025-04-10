<?php
require_once "../etc/config.php";

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }
    if (!array_key_exists("id", $_POST)) {
        throw new Exception("Invalid request parameters");
    }
    $id = $_POST["id"];
    $Profile = Profile::findDataBaseID($id);
    if ($Profile === null) {
        throw new Exception("Profile not found");
    }
    $Profile->delete();
    // redirect the browser to the index page
    redirect("./index.php");
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
?>

<!-- ?php
require_once "./etc/config.php";

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }
    if (!array_key_exists("id", $_POST)) {
        throw new Exception("Invalid request parameters");
    }
    $id = $_POST["id"];
    $profile = Profile::findById($id);
    if ($profile === null) {
        throw new Exception("Profile not found");
    }
    $profile->delete();
    // redirect the browser to the index page
    redirect("index.php");
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
?>
