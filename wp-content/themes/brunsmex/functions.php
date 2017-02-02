<?php
add_theme_support('post-thumbnails'); 

function agregarArticulos() {
    echo '<div class="col-sm-4">
    <a href="';
    echo the_permalink();
    echo '">
    <div class="img-container">
    <img src="';
    echo the_post_thumbnail_url();
    echo '" alt="">
    </div>
    <div class="col-sm-12">
    <h2>';
    if (strlen($post->post_title) > 15)
    { 
        echo substr(the_title($before = '', $after = '', FALSE), 0, 15) . ' [...]'; 
    }
    else
    {
        the_title();
    }
    echo '</h2>
    <p>
    Precio: ';
    echo CFS()->get('precio');
    echo '</p>
    </div>
    </a>
    </div>';
}

function mergeImages($imgPNG, $imgJPG) {
    $dest = imagecreatefrompng($imgPNG);
    $src = imagecreatefromjpeg($imgJPG);

    imagealphablending($dest, false);
    imagesavealpha($dest, true);

    imagecopymerge($dest, $src, 10, 9, 0, 0, 181, 180, 100); //have to play with these numbers for it to work for you, etc.

    header('Content-Type: image/png');
    imagepng($dest);

    imagedestroy($dest);
    imagedestroy($src);
}

?>