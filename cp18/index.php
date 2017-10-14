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

// $unpublishedPosts = array_filter($posts, function($post){
//     return !$post->published;
// });
//
// var_dump($unpublishedPosts);

// $modified = array_map(function($post){
//     return 'foo';
// }, $posts);
//
// var_dump($modified);

$titles = array_column($posts, 'title');

var_dump($titles);
