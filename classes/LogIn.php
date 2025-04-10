<?php

class Login {

    public $id;
    public $password;
    public $email;

    public function __construct($props = null) {
        if ($props != null) {
            if (array_key_exists("id", $props)) {
                $this->id = $props["id"];
            }
            $this->password    = $props["password"];
            $this->email     = $props["email"];

            
            if (array_key_exists("created_at", $props)) {
                $this->created_at = $props["created_at"];
            }
            if (array_key_exists("updated_at", $props)) {
                $this->updated_at = $props["updated_at"];
            }
        }
    }
    
    public function save() {
        $params = [
            ":email"    => $this->email,
            ":password"     => $this->password,
        ];      
    }
}
