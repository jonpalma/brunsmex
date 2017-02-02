<?php $page = 'pie';?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* PIE */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<div class="pie" id="pie">
    <div class="container light-spacing">
        <div class="row no-margin">
            <div class="col-xs-3 left-side">
                <div class="vertical-align">
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#index" class="smoothScroll nav-padd active">INICIO</a>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#nosotros" class="smoothScroll nav-padd">QUIENES SOMOS</a>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#productos" class="smoothScroll nav-padd">PRODUCTOS Y ACCESORIOS</a>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#calidad" class="smoothScroll nav-padd">PORQUÉ BRUNSWICK</a>
                    <a href="<?php if($page != 'index') { echo 'index'; }?>#contacto" class="smoothScroll nav-padd">CONTACTO</a>
                </div>
            </div>
            <div class="col-xs-6 middle">
                <a class="smoothScroll" href="<?php if($page != 'index') { echo 'index.php'; }?>#index">
                    <div class="img-container">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/logo-pie.png" alt="" class="smoothScroll vertical-align">
                    </div>
                </a>
            </div>
            <div class="col-xs-3 right-side">
                <div class="content vertical-align">
                    <a class="fb" target="_blank" href="https://www.facebook.com/">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/fb.png" alt="">
                    </a>
                    <a class="mail" href="mailto:ventas@brunsmex.com.mx">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/mail.png" alt="">
                    </a>
                    <a class="twitter" target="_blank" href="https://twitter.com/">
                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/icons/twitter.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/**********************************/-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->