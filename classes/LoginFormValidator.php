<?php
class LogInFormValidator extends FormValidator {
    public function __construct($data=[]) {
        parent::__construct($data);
    }

    public function validate() {

        // Email
        if (!$this->isPresent("email")) {
            $this->errors["email"] = "Please enter a email.";
        }

        // Password
        if (!$this->isPresent("password")) {
            $this->errors["password"] = "Please enter a password.";
        }
        return count($this->errors) === 0;
    }
}
?>