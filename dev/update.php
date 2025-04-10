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
    $Profile = Story::findDataBaseID($id);
    if ($Profile === null) {
        throw new Exception("Profile not found");
    }
    $validator = new StoryFormValidator($_POST);
    $valid = $validator->validate();
    if ($valid) {
        $data = $validator->data();
        $Profile->headline = $data["headline"];
        $Profile->short_headline = $data["short_headline"];
        $Profile->article = $data["article"];
        $Profile->short_article = $data["short_article"];
        $Profile->img_url = $data["img_url"];
        $Profile->author_id = $data["author_id"];
        $Profile->category_id = $data["category_id"];
        $Profile->location_id = $data["location_id"];
        $Profile->created_at = $data["created_at"];
        $Profile->updated_at = $data["updated_at"];
        $Profile->save();
        redirect("./index.php");
    }
    else {
        $errors = $validator->errors();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION["form-data"] =  $_POST;
        $_SESSION["form-errors"] = $errors;
        redirect("./edit.php?id=$id");
    }
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}

?>