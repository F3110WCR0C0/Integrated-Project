<?php
require_once "../etc/config.php";
print_r($_POST);

try {
    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        throw new Exception("Invalid request method");
    }
    $validator = new LogInFormValidator($_POST);
    $valid = $validator->validate();
    if ($valid) {
        $data = $validator->data();
        $Profile = new Login($data);
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
        redirect("../logging.php");
    }
}
catch (Exception $ex) {
    echo $ex->getMessage();
    exit();
}
?>