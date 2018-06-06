<?php

class Post {
    public $title, $published;

    public function __construct($title, $published) {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
    new Post('Meu primeiro post', true),
    new Post('Meu segundo post', true),
    new Post('Meu terceiro post', false),
    new Post('Meu quarto post', true)
];

$unpublishedPosts = array_filter($posts, function($post) {
    return !$post->published;
});

var_dump($unpublishedPosts);
