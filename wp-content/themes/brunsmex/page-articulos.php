<?php $page = 'articulos';?>
<?php include('header.php');?>
<div class="wrapper articulos" id="articulos">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CABEZA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('cabeza.php');?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="productos" id="productos">
        <div class="container spacing">
            <div class="content">
                <h1>
                    <?php
                    echo $_GET["title"];
                    ?>
                </h1>
                <p>
                    BRUNSMEX S.A. DE C.V.
                </p>
            </div>
            <?php

            if($_GET["cat"] == 'mesas-de-billar-pool')
            {
                $counter = 1;

                while($counter < 6)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'brunswick';
                            break;
                        case 2:
                            $tagname = 'monarch';
                            break;
                        case 3:
                            $tagname = 'beringer';
                            break;
                        case 4:
                            $tagname = 'presidential';
                            break;
                        case 5:
                            $tagname = 'comercial';
                            break;
                        default:
                            $tagname = 'brunswick';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            else if($_GET["cat"] == 'tacos-de-billar-pool')
            {
                $counter = 1;

                while($counter < 19)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'una-pieza';
                            break;
                        case 2:
                            $tagname = 'brunswick';
                            break;
                        case 3:
                            $tagname = 'cobra';
                            break;
                        case 4:
                            $tagname = 'cuetec';
                            break;
                        case 5:
                            $tagname = 'cue-international';
                            break;
                        case 6:
                            $tagname = 'dufferin';
                            break;
                        case 7:
                            $tagname = 'eliminator';
                            break;
                        case 8:
                            $tagname = 'excalibur';
                            break;
                        case 9:
                            $tagname = 'hampton-ridge';
                            break;
                        case 10:
                            $tagname = 'imperial';
                            break;
                        case 11:
                            $tagname = 'lucasi';
                            break;
                        case 12:
                            $tagname = 'minnesota';
                            break;
                        case 13:
                            $tagname = 'players';
                            break;
                        case 14:
                            $tagname = 'players-mujer';
                            break;
                        case 15:
                            $tagname = 'rage';
                            break;
                        case 16:
                            $tagname = 'tiger';
                            break;
                        case 17:
                            $tagname = 'urban';
                            break;
                        case 18:
                            $tagname = 'legend';
                            break;
                        default:
                            $tagname = 'una-pieza';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            else if($_GET["cat"] == 'muebles-taqueras')
            {
                $counter = 1;

                while($counter < 4)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'pared';
                            break;
                        case 2:
                            $tagname = 'piso';
                            break;
                        case 3:
                            $tagname = 'bolera';
                            break;
                        default:
                            $tagname = 'pared';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            else if($_GET["cat"] == 'accesorios-bolas-de-billar')
            {
                $counter = 1;

                while($counter < 4)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'bola-suelta';
                            break;
                        case 2:
                            $tagname = 'carambola';
                            break;
                        case 3:
                            $tagname = 'pool';
                            break;
                        default:
                            $tagname = 'bola-suelta';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            else if($_GET["cat"] == 'accesorios-lamparas')
            {
                $counter = 1;

                while($counter < 4)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'metalicas';
                            break;
                        case 2:
                            $tagname = 'cristal';
                            break;
                        case 3:
                            $tagname = 'capelos';
                            break;
                        default:
                            $tagname = 'metalicas';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            
            else if($_GET["cat"] == 'accesorios-articulos-decorativos')
            {
                $counter = 1;

                while($counter < 6)
                {
                    switch($counter)
                    {
                        case 1:
                            $tagname = 'figuras';
                            break;
                        case 2:
                            $tagname = 'relojes';
                            break;
                        case 3:
                            $tagname = 'cuadro-3d';
                            break;
                        case 4:
                            $tagname = 'cuadro-led';
                            break;
                        case 5:
                            $tagname = 'cuadro-neon';
                            break;
                        default:
                            $tagname = 'figuras';
                            break;
                    }

                    $args = array(
                        'posts_per_page'   => -1,
                        'offset'           => 0,
                        'category'         => '',
                        'category_name'    => $_GET["cat"],
                        'orderby'          => 'title', //meta_value
                        'order'            => 'ASC',
                        'include'          => '',
                        'exclude'          => '',
                        'meta_key'         => '', //precio
                        'meta_value'       => '',
                        'post_type'        => 'post',
                        'post_mime_type'   => '',
                        'post_parent'      => '',
                        'author'	       => '',
                        'author_name'	   => '',
                        'post_status'      => 'publish',
                        'suppress_filters' => true,
                        'tag'              => $tagname
                    );

                    $the_query = new WP_Query($args);

                    if($the_query->have_posts())
                    {
                        $titulo = strtoupper($tagname);
                        $titulo = str_replace('-', ' ', $titulo);
                        echo '<h2 class="articulo-titulo">'. $titulo .'</h2>';
                        echo '<div class="row no-margin">';

                        while($the_query->have_posts())
                        {
                            $the_query->the_post();
                            agregarArticulos();
                        }
                        echo '</div>';
                    }
                    wp_reset_postdata();
                    $counter++;
                }
            }
            else
            {
                $args = array(
                    'posts_per_page'   => -1,
                    'offset'           => 0,
                    'category'         => '',
                    'category_name'    => $_GET["cat"],
                    'orderby'          => 'title', //meta_value
                    'order'            => 'ASC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => '', //precio
                    'meta_value'       => '',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'	       => '',
                    'author_name'	   => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true,
                );

                $posts = get_posts($args);
                if ($posts)
                {
                    echo '<div class="row no-margin">';
                    foreach ($posts as $post) : setup_postdata($post);

                    agregarArticulos();

                    endforeach;
                    echo '</div>';
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PIE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('pie.php');?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MODALS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('modals.php');?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/**********************************/-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
</div>
<?php include('footer.php');?>