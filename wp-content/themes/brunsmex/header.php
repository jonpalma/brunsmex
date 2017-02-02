<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="Mixen">
        <meta name="format-detection" content="telephone=no">
        <link rel="shortcut icon" type="img/png" href="<?php echo bloginfo('template_url').'/'; ?>img/favicon.ico"/>
        <link rel="stylesheet" href="<?php echo bloginfo('template_url').'/'; ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <?php wp_head(); ?>
        <title>BRUNSMEX</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-logo hidden-lg hidden-md hidden-sm">
                    <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/logo-nav.png" alt="logo" class="vertical-align">
                </a>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll vertical-align nav-padd active">INICIO</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#nosotros" class="smoothScroll vertical-align nav-padd">QUIENES SOMOS</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle vertical-align" role="button" aria-haspopup="true" aria-expanded="false">PRODUCTOS Y ACCESORIOS <span class="caret"></span></a>
                            <ul class="dropdown-menu first">
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Mesas de Billar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="articulos?cat=mesas-de-billar-pool&title=POOL" class="menu-item">Pool</a></li>
                                        <li><a href="articulos?cat=mesas-de-billar-carambola&title=CARAMBOLA" class="menu-item">Carambola</a></li>
                                        <li><a href="articulos?cat=mesas-de-billar-infantiles&title=INFANTILES" class="menu-item">Infantiles</a></li>
                                        <li><a href="articulos?cat=mesas-de-billar-pano&title=PAÑO" class="menu-item">Paño</a></li>
                                        <li><a href="articulos?cat=mesas-de-billar-refacciones&title=REFACCIONES" class="menu-item">Refacciones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Tacos de Billar</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="articulos?cat=tacos-de-billar-pool&title=POOL" class="menu-item">Pool</a></li>
                                        <li><a href="articulos?cat=tacos-de-billar-tacos-para-burra&title=TACOS PARA BURRA" class="menu-item">Tacos para Burra</a></li>
                                        <li><a href="articulos?cat=tacos-de-billar-carambola&title=CARAMBOLA" class="menu-item">Carambola</a></li>
                                        <li><a href="articulos?cat=tacos-de-billar-refacciones&title=REFACCIONES" class="menu-item">Refacciones</a></li>
                                        <li><a href="articulos?cat=tacos-de-billar-accesorios&title=ACCESORIOS" class="menu-item">Accesorios</a></li>
                                        <li><a href="articulos?cat=tacos-de-billar-estuches-y-fundas&title=ESTUCHES Y FUNDAS" class="menu-item">Estuches y Fundas</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Accesorios</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="articulos?cat=accesorios-kit-de-accesorios&title=KIT DE ACCESORIOS" class="menu-item">Kit de Accesorios</a></li>
                                        <li><a href="articulos?cat=accesorios-bolas-de-billar&title=BOLAS DE BILLAR" class="menu-item">Bolas de Billar</a></li>
                                        <li><a href="articulos?cat=accesorios-tizar&title=TIZAR" class="menu-item">Tizar</a></li>
                                        <li><a href="articulos?cat=accesorios-cepillos&title=CEPILLOS" class="menu-item">Cepillos</a></li>
                                        <li><a href="articulos?cat=accesorios-contadores&title=CONTADORES" class="menu-item">Contadores</a></li>
                                        <li><a href="articulos?cat=accesorios-cubiertas&title=CUBIERTAS" class="menu-item">Cubiertas</a></li>
                                        <li><a href="articulos?cat=accesorios-portatizar&title=PORTATIZAR" class="menu-item">Portatizar</a></li>
                                        <li><a href="articulos?cat=accesorios-liquidos-y-pegamentos&title=LIQUIDOS Y PEGAMENTOS" class="menu-item">Liq. y Pegamentos</a></li>
                                        <li><a href="articulos?cat=accesorios-triangulos-y-rombos&title=TRIANGULOS Y ROMBOS" class="menu-item">Triangulos y Rombos</a></li>
                                        <li><a href="articulos?cat=accesorios-varios&title=VARIOS" class="menu-item">Varios</a></li>
                                        <li><a href="articulos?cat=accesorios-articulos-decorativos&title=ARTICULOS DECORATIVOS" class="menu-item">Articulos Decorativos</a></li>
                                        <li><a href="articulos?cat=accesorios-lamparas&title=LAMPARAS" class="menu-item">Lamparas</a></li>
                                        <li><a href="articulos?cat=accesorios-promociones&title=PROMOCIONES" class="menu-item">Promociones</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Mesas de Juego</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="articulos?cat=mesas-de-juego-darderas&title=DARDERAS" class="menu-item">Darderas</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-ping-pong&title=PING PONG" class="menu-item">Ping Pong</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-hockey&title=HOCKEY" class="menu-item">Hockey</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-casino&title=CASINO" class="menu-item">Casino</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-bagso-fun&title=BAGSO FUN" class="menu-item">Bagso Fun</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-futbolitos&title=FUTBOLITOS" class="menu-item">Futbolitos</a></li>
                                        <li><a href="articulos?cat=mesas-de-juego-shuffleboard&title=SHUFFLEBOARD" class="menu-item">Shuffleboard</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item dropdown dropdown-submenu">
                                    <a class="dropdown-toggle" role="button" aria-haspopup="true" aria-expanded="false">Muebles</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="articulos?cat=muebles-taqueras&title=TAQUERAS" class="menu-item">Taqueras</a></li>
                                        <li><a href="articulos?cat=muebles-cantinas&title=CANTINAS" class="menu-item">Cantinas</a></li>
                                        <li><a href="articulos?cat=muebles-mesa-para-poker&title=MESA PARA POKER" class="menu-item">Mesa para Poker</a></li>
                                        <li><a href="articulos?cat=muebles-mesa-botanera&title=MESA BOTANERA" class="menu-item">Mesa Botanera</a></li>
                                        <li><a href="articulos?cat=muebles-back bars&title=BACK BARS" class="menu-item">Back Bars</a></li>
                                        <li><a href="articulos?cat=muebles-sillas-y-bancos&title=SILLAS Y BANCOS" class="menu-item">Sillas y Bancos</a></li>
                                        <li><a href="articulos?cat=muebles-mesa-texas-holdem&title=MESA TEXAS HOLDEM" class="menu-item">Mesa Texas Holdem</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#calidad" class="smoothScroll vertical-align nav-padd">PORQUÉ BRUNSWICK</a></li>
                        <li><a href="<?php if($page != 'index') { echo 'index'; }?>#contacto" class="smoothScroll vertical-align nav-padd">CONTACTO</a></li>
                    </ul>
                </div>
            </div>
        </nav>