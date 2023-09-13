<?php 
class Product {
    private $id;
    private $name;
    private $description;
    private $sku;
    private $price;
    private $categories;
    private $tags;
    private $createAt;
    private $active;

    public function __construct() {
        $this->categories = array();
        $this->tags = array();
    }

    // Getters y Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getSku() {
        return $this->sku;
    }

    public function setSku($sku) {
        $this->sku = $sku;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getCategories() {
        return $this->categories;
    }

    public function addCategories(Categories $category) {
        $this->categories[] = $category;
    }

    public function setCategories(array $categories) {
        $this->categories = $categories;
    }

    public function getTags() {
        return $this->tags;
    }

    public function addTags(Tags $tag) {
        $this->tags[] = $tag;
    }

    public function setTags(array $tags) {
        $this->tags = $tags;
    }

    public function getCreateAt() {
        return $this->createAt;
    }

    public function setCreateAt($createAt) {
        $this->createAt = $createAt;
    }

    public function getActive() {
        return $this->active;
    }

    public function setActive($active) {
        $this->active = $active;
    }
}
?>