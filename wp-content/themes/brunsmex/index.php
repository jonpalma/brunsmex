<?php $page = 'index';?>
<?php include('header.php');?>
<div class="wrapper index" id="index">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CABEZA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('cabeza.php');?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* BANNER */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="banner" id="banner">
        <div id="carousel-banner" class="carousel slide" data-ride="carousel" data-interval="false">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $arrayBanner = CFS()->get('banner_array');
                $counter = 0;
                if($arrayBanner)
                {
                    $arraySize = count($arrayBanner);
                    $arrayEnd = end($arrayBanner);
                    foreach($arrayBanner as $item)
                    {
                ?>
                <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div class="item">';
                        }
                ?>
                <div class="img-container">
                    <img class="img-bg" src="<?php echo $item['banner_img'];?>" alt="">
                </div>
                <div class="container">
                    <div class="vertical-align">
                        <div class="content">
                            <h1>
                                <?php echo $item['banner_title'];?>
                            </h1>
                            <p>
                                <?php echo $item['banner_text'];?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
                        $counter++;
                    }
                    echo '</div>';
                }
                else
                {
                    //No hay banners
                }
                ?>
            </div>
            <!-- Controls -->
            <div class="controls">
                <a class="left carousel-control" href="#carousel-banner" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-banner" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CINTA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="cinta" id="cinta">
        <div class="container">
            <div class="col-xs-4">
                <div class="vertical-align">
                    <?php
                    $counter = 0;
                    if (have_posts())
                    {
                        the_post();
                    }
                    ?>
                    <?php
                    query_posts('showposts=1');
                    if (have_posts())
                    {
                        while (have_posts())
                        { 
                            the_post();
                    ?>
                    <a class="smoothScroll" href="<?php echo get_the_permalink();?>">
                        <?php
                            $counter++;
                        }
                    }
                    wp_reset_query();
                        ?>
                        <img class="front" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon1.png" alt="">
                        <img class="hover" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon1-red.png" alt="">
                        <p>
                            PRODUCTOS NUEVOS
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="vertical-align">
                    <a class="smoothScroll" href="articulos?cat=accesorios-promociones&title=PROMOCIONES">
                        <img class="front" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon2.png" alt="">
                        <img class="hover" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon2-red.png" alt="">
                        <p>
                            PROMOCIONES
                        </p>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="vertical-align">
                    <a class="smoothScroll" href="#calidad">
                        <img class="front" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon3.png" alt="">
                        <img class="hover" src="<?php echo bloginfo('template_url').'/'; ?>img/icons/icon3-red.png" alt="">
                        <p>
                            CALIDAD BRUNSWICK
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTOS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="productos" id="productos">
        <div class="container spacing">
            <div class="content">
                <h1>
                    <?php echo CFS()->get('productos_title');?>
                </h1>
                <p>
                    <?php echo CFS()->get('productos_sub_title');?>
                </p>
            </div>
            <div class="row no-margin">
                <?php
                $args = array(
                    'posts_per_page'   => -1,
                    'offset'           => 0,
                    'category'         => '',
                    'category_name'    => 'mesas-de-billar-pool',
                    'orderby'          => 'title',
                    'order'            => 'ASC',
                    'include'          => '',
                    'exclude'          => '',
                    'meta_key'         => 'personalizacion',
                    'meta_value'       => '1',
                    'post_type'        => 'post',
                    'post_mime_type'   => '',
                    'post_parent'      => '',
                    'author'	       => '',
                    'author_name'	   => '',
                    'post_status'      => 'publish',
                    'suppress_filters' => true
                );

                $the_query = new WP_Query($args);

                if($the_query->have_posts())
                {
                    while($the_query->have_posts())
                    {
                        $the_query->the_post();
                ?>
                <div class="col-sm-4">
                    <a href="<?php echo the_permalink();?>">
                        <div class="img-container">
                            <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                        </div>
                        <div class="col-sm-7">
                            <div class="vertical-align">
                                <h2>
                                    <?php
                        if (strlen($post->post_title) > 15)
                        { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 15) . ' [...]'; 
                        }
                        else
                        {
                            the_title();
                        }
                                    ?>
                                </h2>
                                <p>
                                    Precio: <?php echo CFS()->get('precio');?>
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="col-sm-5 hidden-xs">
                        <div class="vertical-align">
                            <?php
                        if(CFS()->get('personalizacion') == 1)
                        {
                            $titulo = strtolower(get_the_title());
                            $titulo = str_replace(' ', '-', $titulo);
                            ?>
                            <button type="button" class="bttnMesa" data-value="<?php echo $titulo;?>" data-toggle="modal" data-target="#modal-<?php echo $titulo;?>">
                                PERSONALIZAR
                            </button>
                            <?php
                        }
                            ?>
                        </div>
                    </div>
                </div>
                <?php
                    }
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CATALOGO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="catalogo parallax-container" id="catalogo">
        <div class="parallax">
            <img src="<?php echo bloginfo('template_url').'/'; ?>img/index/catalogo/bg.jpg" alt="Parallax">
        </div>
        <div class="container light-spacing">
            <div class="vertical-align">
                <h1>
                    <?php echo CFS()->get('catalogo_title');?>
                </h1>
                <a target="_blank" href="<?php echo CFS()->get('catalogo_doc');?>">
                    <?php echo CFS()->get('catalogo_bttn');?>
                </a>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* NOSOTROS */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="nosotros" id="nosotros">
        <div class="container spacing">
            <div class="content">
                <h1>
                    <?php echo CFS()->get('nosotros_title');?>
                </h1>
                <p>
                    <?php echo CFS()->get('nosotros_sub_title');?>
                </p>
            </div>
            <div id="carousel-nosotros" class="carousel slide" data-ride="carousel" data-interval="false">
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php
                    $arrayNosotros = CFS()->get('nosotros_textos_array');
                    $arraySize = count($arrayNosotros);
                    $arrayEnd = end($arrayNosotros);
                    $counter = 0;
                    foreach($arrayNosotros as $item)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<div class="item active">';
                        }
                        else
                        {
                            echo '</div>';
                            echo '<div class="item">';
                        }
                    ?>
                    <div class="vertical-align">
                        <h2>
                            <?php echo $item['nosotros_textos_title'];?>
                        </h2>
                        <p>
                            <?php echo $item['nosotros_textos_text'];?>
                        </p>
                    </div>
                    <?php
                        $counter++;
                    }
                    echo '</div>';
                    ?>
                </div>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <?php
                    $arrayNosotros = CFS()->get('nosotros_textos_array');
                    $arraySize = count($arrayNosotros);
                    $arrayEnd = end($arrayNosotros);
                    $counter = 0;
                    foreach($arrayNosotros as $item)
                    {
                    ?>
                    <?php
                        if($counter == 0)
                        {
                            echo '<li data-target="#carousel-nosotros" data-slide-to="'.$counter.'" class="active"></li>';
                        }
                        else
                        {
                            echo '<li data-target="#carousel-nosotros" data-slide-to="'.$counter.'"></li>';
                        }
                    ?>
                    <?php
                        $counter++;
                    }
                    ?>
                </ol>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CALIDAD */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="calidad" id="calidad">
        <div class="container spacing">
            <div class="content">
                <p>
                    <?php echo CFS()->get('calidad_title');?>
                </p>
                <h1>
                    <?php echo CFS()->get('calidad_sub_title');?>
                </h1>
            </div>
            <p class="texto">
                <?php echo CFS()->get('calidad_text');?>
            </p>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* MAPA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="mapa" id="mapa">
        <button id="bttnMapa">
            <?php echo CFS()->get('map');?>
        </button>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CONTACTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="contacto" id="contacto">
        <div class="container spacing">
            <div class="col-sm-12">
                <div class="content">
                    <h1>
                        <?php echo CFS()->get('contacto_title');?>
                    </h1>
                    <p>
                        <?php echo CFS()->get('contacto_sub_title');?>
                    </p>
                </div>
            </div>
            <div class="col-sm-6 left-side">
                <p class="direccion">
                    <?php echo CFS()->get('address');?>
                </p>
                <p class="telefono">
                    <?php echo CFS()->get('phone');?>
                </p>
                <div class="email">
                    <a href="mailto:<?php echo CFS()->get('e_mail');?>">
                        <?php echo CFS()->get('e_mail');?>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 right-side">
                <div class="container form-container light-spacing">
                    <?php echo do_shortcode('[contact-form-7 id="7" title="Formulario de contacto"]');?>
                </div>
            </div>
        </div>
    </div>
    <!--
    <canvas id="myCanvas" width="1740" height="945"></canvas>
    -->
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