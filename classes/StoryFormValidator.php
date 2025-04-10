<?php
class StoryFormValidator extends FormValidator {
    public function __construct($data=[]) {
        parent::__construct($data);
    }

    public function validate() {

        // Image

        if (!$this->isPresent("img_url")) {
            $this->errors["img_url"] = "Please enter a Image";
        }
        else if (!$this->minLength("img_url", 0)) {
            $this->errors["img_url"] = "Please enter a Image";
        }
        
        // Author

        if (!$this->isPresent("author_id")) {
            $this->errors["author_id"] = "Please enter a Author";
        }

                
        // Location

        if (!$this->isPresent("location_id")) {
            $this->errors["location_id"] = "Please enter a Location";
        }


        // Headline

        if (!$this->isPresent("headline")) {
            $this->errors["headline"] = "Please enter a Headline";
        }
        else if (!$this->minLength("headline", 0)) {
            $this->errors["headline"] = "Please enter a Headline";
        }

        // Short Headline

        if (!$this->isPresent("short_headline")) {
            $this->errors["short_headline"] = "Please enter a Short headline";
        }
        else if (!$this->minLength("short_headline", 0)) {
            $this->errors["short_headline"] = "Please enter a Short headline";
        }


        // article 

        if (!$this->isPresent("article")) {
            $this->errors["article"] = "Please enter an Article";
        }

        // short article 

        if (!$this->isPresent("short_article")) {
            $this->errors["short_article"] = "Please enter an Short Article";
        }

        // created_at

        if (!$this->isPresent("created_at")) {
            $this->errors["created_at"] = "Please enter when it was created";
        }
        

        // updated_at

        if (!$this->isPresent("updated_at")) {
            $this->errors["updated_at"] = "Please enter when it was last Updated";
        }
                

        // category_id

        if (!$this->isPresent("category_id")) {
            $this->errors["category_id"] = "Please choose a Category";
        }


        return count($this->errors) === 0;
    }
}
?>