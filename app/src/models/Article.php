<?php
class Article {
    
  // Properties
  private $title;
  private $description;
  private $date;
  private $autor;

  public function __construct($title,$description,$date,$autor) {
    $this->title = $title;
    $this->description = $description;
    $this->date = $date;
    $this->autor = $autor;
 }

  // Methods
  function setTitle($title) {
    $this->title = $title;
  }
  function getTile() {
    return $this->title;
  }
  function setDescription($description) {
    $this->description = $description;
  }
  function getDescription() {
    return $this->description;
  }
  function setDate($date) {
    $this->date = $date;
  }
  function getDate() {
    return $this->date;
  }
  function setAutor($autor) {
    $this->autor = $autor;
  }
  function getAutor() {
    return $this->autor;
  }
}
?>