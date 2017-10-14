<?php

/**
 * Post Class
 */
class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)
    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('Title one', true),
    new Post('Title two', true),
    new Post('Title three', true),
    new Post('Title four', false)
];

var_dump($posts);