<?php

namespace Blog;

class Post
{
    private $title;
    private $description;
    private $status;


    public $author;
    protected $date;

    public function __construct($title, $description='')
    {
        $this->title = $title;
        $this->description = $description;
        $this->status = 'active';
        $this->author = "Random";
        $this->date = date('Y-m-d');
    }

    public function setStatus ($status) {
      $this->status = $status;
      return $this;
    }

    public function getStatus ($status) {
      return $this->status;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;

    }

    public function setDescription($description){
      $this->description = $description;
      return $this;

    }

    public  function toArray() {

      return [
        'title' -> $this->title,
        'description' -> $this->description,
        'status' -> $this->status,
      ];
    }
}
