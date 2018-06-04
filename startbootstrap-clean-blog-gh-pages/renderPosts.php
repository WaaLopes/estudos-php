<?php 

require_once 'connection.php';

$posts = $mysqli->query("SELECT * FROM post");

$count = 0;
foreach ($posts as $post) {
    $titulo = $post["titulo"];
    $texto = $post["texto"];
    $autor = $post["autor"];
    $data_post = $post["data"];

    echo '
        <div class="post-preview">
            <a href="post.php">
                <h2 class="post-title">
                    '.$titulo.'
                </h2>
                <h3 class="post-subtitle">
                    '.$texto.'
                </h3>
            </a>
            <p class="post-meta">Posted by
                <a href="#">'.$autor.'</a>
                on '.$data_post.'</p>
        </div>
        <hr>';

    $count++;
}
