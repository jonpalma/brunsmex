<?php $page = 'detalle-producto';?>
<?php include('header.php');?>
<div class="wrapper detalle-producto" id="detalle-producto">
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* CABEZA */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <?php include('cabeza.php');?>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PRODUCTO */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div class="producto" id="producto">
        <div class="container spacing">
            <div class="col-sm-8 img-ppl">
                <div class="img-container">
                    <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                </div>
            </div>
            <?php
            $arrayImagenes = CFS()->get('imagenes_array');
            $arraySize = count($arrayImagenes);
            $counter = 0;

            if($arraySize == 0)
            {
                echo '<div class="col-sm-4 img-sec no-height">';
            }
            else
            {
                echo '<div class="col-sm-4 img-sec">';
                echo '<div id="carousel-img-sec" class="carousel slide" data-ride="carousel" data-interval="false">';
                echo '<div class="carousel-inner" role="listbox">';
                foreach($arrayImagenes as $item)
                {
                    if($counter == 0)
                    {
                        echo '<div class="item active">';
                        echo '<div class="row no-margin">';
                    }
                    else if($counter % 2 == 0)
                    {
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="item">';
                        echo '<div class="row no-margin">';
                    }
            ?>
            <div class="img-container">
                <img src="<?php echo $item['img'];?>" alt="">
            </div>
            <?php
                    $counter++;
                }
                echo '</div>';
                echo '</div>';
                echo '</div>';
            ?>
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php
                $arrayIndicators = CFS()->get('imagenes_array');
                $counter = 0;
                if($arrayIndicators)
                {
                    $arraySize = count($arrayIndicators);
                    $arrayEnd = end($arrayIndicators);
                    foreach($arrayIndicators as $item)
                    {
                        if($counter == 0)
                        {
                            echo '<li data-target="#carousel-img-sec" data-slide-to="'. $counter .'" class="active"></li>';
                        }
                        else if($counter % 2 == 0)
                        {
                            echo '<li data-target="#carousel-img-sec" data-slide-to="'. ($counter/2) .'"></li>';
                        }
                        $counter++;
                    }
                }
                else
                {
                    echo '<li data-target="#carousel-img-sec" data-slide-to="0" class="active"></li>';
                }
                ?>
            </ol>
            <?php
                echo '</div>';
            }
            echo '</div>';
            ?>
            <div class="col-sm-8">
                <h1>
                    Producto: <span><?php echo get_the_title(); ?></span>
                </h1>
            </div>
            <div class="col-sm-4">
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
            <div class="col-xs-12 descripcion">
                <p class="codigo">
                    <span>Código:</span> <?php echo CFS()->get('codigo');?>
                </p>
                <p class="precio">
                    <span>Precio desde:</span> <?php echo CFS()->get('precio');?>
                </p>
                <p class="text">
                    <?php
                    if(have_posts())
                    {
                        while(have_posts())
                        {
                            the_post();
                    ?>

                    <span>Descripción:</span> <?php echo wpautop (get_the_content());?>

                    <?php
                        }
                    }
                    ?>
                </p>
            </div>
            <div class="col-xs-12 relacionadas">
                <div class="row no-margin">
                    <?php
                    $counter = 0;
                    query_posts('cat='.$categoryID.'&orderby=rand');
                    while (have_posts()) : the_post();
                    if($the_post_name != get_the_title() && $counter != 3)
                    {
                    ?>
                    <div class="col-sm-4">
                        <a href="<?php echo get_the_permalink();?>">
                            <div class="img-container">
                                <img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
                            </div>
                            <div class="content">
                                <div class="vertical-align">
                                    <h2>
                                        <?php
                        if (strlen($post->post_title) > 20)
                        { 
                            echo substr(the_title($before = '', $after = '', FALSE), 0, 20) . ' [...]'; 
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
                    </div>
                    <?php
                        $counter++;
                    }
                    endwhile;
                    if($counter == 1)
                    {
                        echo '<div class="col-sm-4"></div>';
                        echo '<div class="col-sm-4"></div>';
                    }

                    if($counter == 2)
                    {
                        echo '<div class="col-sm-4"></div>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-xs-12 bottom">
                <nav id="post-entries">
                    <div class="row no-margin">
                        <div class="nav-prev fl col-xs-6">
                            <?php previous_post_link('%link', '<p class="left-side">ANTERIOR</p>');?>
                        </div>
                        <div class="nav-next fr col-xs-6">
                            <?php next_post_link('%link', '<p class="right-side">SIGUIENTE</p>');?>
                        </div>
                    </div>
                </nav>
            </div>
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