<?php

include "./Post.php";
use Blog\Post;

$posts[] = new Post('First Post', 'lorem ispum description');
$posts[] = new Post('Second Post', 'lorem ispum description');
$posts[] = new Post('Third Post', 'lorem ispum description');


// $test = $posts[0]->setTitle('aaaacb')
//     ->setDescription("this is my description")
//     ->setStatus('inactive');





echo "<pre>";


while ($post = array_pop($posts)):

    var_dump($post->getTitle());


endwhile;



