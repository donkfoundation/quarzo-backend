<?php 
class Category {
    private $id;
    private $cat_name;
    private $cat_description;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getCatName() {
        return $this->cat_name;
    }

    public function setCatName($cat_name) {
        $this->cat_name = $cat_name;
    }

    public function getCatDescription() {
        return $this->cat_description;
    }

    public function setCatDescription($cat_description) {
        $this->cat_description = $cat_description;
    }
}

?>