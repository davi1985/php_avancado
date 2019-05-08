<?php
// Método construtor - primeiro método a ser executado

class Post
{
    private $title;
    private $date;
    private $body;
    private $comments;

    public function __construct($t)
    {
        $this->setTitle($t);
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        }
    }
}

$post = new Post("New Title");
echo $post->getTitle();
