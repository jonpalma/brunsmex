<?php $page = 'modals';?>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/* MODALS */-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<!--/* GLENWOOD */-->
<div class="modal fade" id="modal-glenwood" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-glenwood" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-glenwood" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-glenwood" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-glenwood" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-glenwood" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-glenwood">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="7-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_7.jpg" alt="">
                                        <p>
                                            7 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="8-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-glenwood">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="chestnut" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Chestnut
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="espresso" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tuscana" class="opcionAcabado 8-ft hidden">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/tuscana.jpg" alt="">
                                        <p>
                                            Tuscana
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="matte-black-chestnut" class="opcionAcabado 8-ft hidden">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-matte-black-chestnut-glenwood.gif" alt="">
                                        <p>
                                            Matte Black/Chestnut
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-glenwood">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="fringe" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-fringe.gif" alt="">
                                        <p>
                                            FRINGE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="shield" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-shield.gif" alt="">
                                        <p>
                                            SHIELD
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-glenwood">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="ball-and-claw" class="opcionPatas tuscana active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/leg-ball-and-claw.gif" alt="">
                                        <p>
                                            BALL AND CLAW
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ram-s-head" class="opcionPatas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/leg-ram-s-head.gif" alt="">
                                        <p>
                                            RAM'S HEAD
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="round" class="opcionPatas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/round.gif" alt="">
                                        <p>
                                            ROUND
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="talon-ball-and-claw" class="opcionPatas matte-black-chestnut">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/leg-talon-ball-and-claw.gif" alt="">
                                        <p>
                                            TALON BALL AND CLAW
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tapered" class="opcionPatas tuscana matte-black-chestnut">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/tapered.gif" alt="">
                                        <p>
                                            TAPERED
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-glenwood">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/glenwood/glenwood-7-ft-espresso-shield-ball-and-claw-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/glenwood/glenwood-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* TREMONT */-->
<div class="modal fade" id="modal-tremont" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-tremont" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-tremont" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-tremont" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-tremont" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-tremont" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-tremont">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-tremont">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="chestnut" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Chestnut
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="espresso" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-tremont">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-tremont">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-tremont">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* ALLENTON */-->
<div class="modal fade" id="modal-allenton" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-allenton" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-allenton" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-allenton" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-allenton" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-allenton" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-allenton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="7-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_7.jpg" alt="">
                                        <p>
                                            7 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="8-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-allenton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="chestnut" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Chestnut
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="espresso" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="traditional-cherry" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/cherry.gif" alt="">
                                        <p>
                                            Traditional Cherry
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tuscana" class="opcionAcabado 8-ft hidden">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/tuscana.jpg" alt="">
                                        <p>
                                            Tuscana
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="driftwood" class="opcionAcabado 8-ft hidden">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/driftwood.jpg" alt="">
                                        <p>
                                            Driftwood
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-allenton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-allenton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="ball-and-claw" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/leg-ball-and-claw.gif" alt="">
                                        <p>
                                            BALL AND CLAW
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tapered" class="opcionPatas tuscana-driftwood">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/patas/tapered.gif" alt="">
                                        <p>
                                            TAPERED
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-allenton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <!--
<button type="button" class="btn cotiza">Cotizar</button>
-->
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* BLACK WOLF */-->
<div class="modal fade" id="modal-black-wolf" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-black-wolf" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-black-wolf" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-black-wolf" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-black-wolf" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-black-wolf" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-black-wolf">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="7-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_7.jpg" alt="">
                                        <p>
                                            7 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="8-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-black-wolf">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="black" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Black
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-black-wolf">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="drop-pocket" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-drop-pocket-black-wolf.gif" alt="">
                                        <p>
                                            Drop Pocket
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gully-return" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-gully-return-black-wolf.gif" alt="">
                                        <p>
                                            Gully Return
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-black-wolf">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-black-wolf">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* BAYFIELD */-->
<div class="modal fade" id="modal-bayfield" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-bayfield" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-bayfield" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-bayfield" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-bayfield" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-bayfield" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-bayfield">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-bayfield">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="matte-black" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-matte-black.gif" alt="">
                                        <p>
                                            Matte Black
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="matte-black-chestnut" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-chestnut-matte-black.gif" alt="">
                                        <p>
                                            Matte Black/Chestnut
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-bayfield">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="fringe" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-fringe.gif" alt="">
                                        <p>
                                            Fringe
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="shield" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-shield.gif" alt="">
                                        <p>
                                            Shield
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-bayfield">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-bayfield">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* BRIDGEPORT */-->
<div class="modal fade" id="modal-bridgeport" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-bridgeport" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-bridgeport" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-bridgeport" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-bridgeport" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-bridgeport" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-bridgeport">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-bridgeport">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="chestnut" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Chestnut
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chestnut-with-drawers" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-chestnut-with-drawers-bridgeport.gif" alt="">
                                        <p>
                                            Chestnut with drawers
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="espresso" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="espresso-with-drawers" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso-with-drawers-bridgeport.gif" alt="">
                                        <p>
                                            Espresso with drawers
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-bridgeport">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-bridgeport">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-bridgeport">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* OAKLAND */-->
<div class="modal fade" id="modal-oakland" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-oakland" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-oakland" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-oakland" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-oakland" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-oakland" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-oakland">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-oakland">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="chestnut" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Chestnut
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-oakland">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="fringe" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-fringe.gif" alt="">
                                        <p>
                                            Fringe
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="shield" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-shield.gif" alt="">
                                        <p>
                                            Shield
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-oakland">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-oakland">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* CENTURION */-->
<div class="modal fade" id="modal-centurion" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-centurion" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-centurion" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-centurion" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-centurion" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-centurion" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-centurion">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-centurion">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="matte-black-laminate" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Matte Black Laminate
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-centurion">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="drop-pocket" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-drop-pocket-centurion.gif" alt="">
                                        <p>
                                            Drop Pocket
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gully-return" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-gully-return-centurion.gif" alt="">
                                        <p>
                                            Gully Return
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-centurion">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-centurion">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* METRO */-->
<div class="modal fade" id="modal-metro" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-metro" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-metro" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-metro" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-metro" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-metro" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-metro">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-metro">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="matte-black-nickel-trim" class="opcionAcabado matte-black-nickel-trim active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-matte-black-nickel-trim-gold-crown-v.gif" alt="">
                                        <p>
                                            Matte Black/Nickel trim
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tournament-edition-black" class="opcionAcabado 9-ft hidden">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-tournament-edition-black.jpg" alt="">
                                        <p>
                                            Tournament Edition Black
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-metro">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="drop-pocket" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-drop-pocket-black-wolf.gif" alt="">
                                        <p>
                                            Drop Pocket
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gully-return" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-gully-return-centurion.gif" alt="">
                                        <p>
                                            Gully Return
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-metro">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-metro">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* MERRIMACK */-->
<div class="modal fade" id="modal-merrimack" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-merrimack" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-merrimack" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-merrimack" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-merrimack" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-merrimack" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-merrimack">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-merrimack">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="nutmeg" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Nutmeg
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="driftwood" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/Driftwood.jpg" alt="">
                                        <p>
                                            Driftwood
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-merrimack">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-merrimack">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-merrimack">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* TREVISO */-->
<div class="modal fade" id="modal-treviso" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-treviso" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-treviso" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-treviso" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-treviso" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-treviso" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-treviso">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-treviso">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="espresso" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-treviso">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-treviso">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-treviso">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* BRIXTON */-->
<div class="modal fade" id="modal-brixton" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-brixton" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-brixton" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-brixton" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-brixton" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-brixton" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-brixton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-brixton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="beachwood" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Beachwood
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="driftwood" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/Driftwood.jpg" alt="">
                                        <p>
                                            Driftwood
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-brixton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-brixton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-brixton">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* LEXINGTON */-->
<div class="modal fade" id="modal-lexington" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-lexington" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-lexington" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-lexington" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-lexington" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-lexington" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-lexington">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-lexington">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="plum" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/plum.jpg" alt="">
                                        <p>
                                            Plum
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-lexington">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-lexington">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-lexington">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* MACKENZIE */-->
<div class="modal fade" id="modal-mackenzie" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-mackenzie" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-mackenzie" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-mackenzie" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-mackenzie" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-mackenzie" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-mackenzie">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-mackenzie">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="deep-madeira" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish_deep_madeira.jpg" alt="">
                                        <p>
                                            Deep Madeira
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-mackenzie">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-mackenzie">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-mackenzie">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* DE SOTO */-->
<div class="modal fade" id="modal-de-soto" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-de-soto" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-de-soto" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-de-soto" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-de-soto" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-de-soto" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-de-soto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-de-soto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="espresso" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-espresso.gif" alt="">
                                        <p>
                                            Espresso
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-de-soto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-de-soto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-de-soto">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* WHITE GOLD CROWN IV LIMITED EDITION */-->
<div class="modal fade" id="modal-white-gold-crown-iv-limited-edition" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-white-gold-crown-iv-limited-edition" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-white-gold-crown-iv-limited-edition" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-white-gold-crown-iv-limited-edition" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-white-gold-crown-iv-limited-edition" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-white-gold-crown-iv-limited-edition" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-white-gold-crown-iv-limited-edition">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft-pro" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8_pro.jpg" alt="">
                                        <p>
                                            8 FT. PRO
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-white-gold-crown-iv-limited-edition">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="white" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/white.jpg" alt="">
                                        <p>
                                            White
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-white-gold-crown-iv-limited-edition">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-white-gold-crown-iv-limited-edition">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-white-gold-crown-iv-limited-edition">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/white-gold-crown-iv-limited-edition/white-gold-crown-iv-limited-edition-8-ft-pro-white-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/white-gold-crown-iv-limited-edition/white-gold-crown-iv-limited-edition-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* GOLD CROWN V */-->
<div class="modal fade" id="modal-gold-crown-v" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-gold-crown-v" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-gold-crown-v" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-gold-crown-v" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-gold-crown-v" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-gold-crown-v" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-gold-crown-v">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="9-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-gold-crown-v">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="matte-black-nickel-trim" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-matte-black-nickel-trim-gold-crown-v.gif" alt="">
                                        <p>
                                            Matte Black/Nickel trim
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="tournament-edition-mahogany" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-tournament-edition-mahogany-gold-crown-v.gif" alt="">
                                        <p>
                                            Tournament Edition Mahogany
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mahogany-nickel-trim" class="opcionAcabado">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/finish-mahogany-nickel-trim-gold-crown-v.gif" alt="">
                                        <p>
                                            Mahogany/Nickel trim
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-gold-crown-v">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="drop-pocket" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-drop-pocket-gold-crown-v.gif" alt="">
                                        <p>
                                            Drop Pocket
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gully-return" class="opcionBuchacas">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/buchacas/pockets-gully-return.gif" alt="">
                                        <p>
                                            Gully Return
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-gold-crown-v">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-gold-crown-v">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* BIRMINGHAM */-->
<div class="modal fade" id="modal-birmingham" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-birmingham" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-birmingham" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-birmingham" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-birmingham" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-birmingham" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-birmingham">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-birmingham">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="charcoal" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/charcoal.jpg" alt="">
                                        <p>
                                            Charcoal
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-birmingham">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-birmingham">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-birmingham">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* MANHATTAN */-->
<div class="modal fade" id="modal-manhattan" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-manhattan" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-manhattan" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-manhattan" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-manhattan" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-manhattan" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-manhattan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="8-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/brunswick_sizethumb_8.jpg" alt="">
                                        <p>
                                            8 FT.
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="9-ft" class="opcionTamano">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-manhattan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="black-stainless-steel" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Black/Stainless Steel
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-manhattan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-manhattan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-manhattan">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/* ISABELLA */-->
<div class="modal fade" id="modal-isabella" tabindex="-1" role="dialog" aria-labelledby="personaliza" aria-hidden="true">
    <div class="vertical-alignment-helper">
        <div class="modal-dialog vertical-align-center">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                    </button>
                    <div class="content">
                        <h1>
                            PERSONALIZAR
                        </h1>
                        <p>
                            BRUNSMEX S.A. DE C.V.
                        </p>
                    </div>
                </div>
                <div class="modal-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tamano-isabella" aria-controls="tamano" role="tab" data-toggle="tab">
                                <h3>
                                    TAMAÑO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#acabado-isabella" aria-controls="acabado" role="tab" data-toggle="tab">
                                <h3>
                                    ACABADO
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#piedra-isabella" aria-controls="piedras" role="tab" data-toggle="tab">
                                <h3>
                                    PIEDRAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#buchacas-isabella" aria-controls="buchacas" role="tab" data-toggle="tab">
                                <h3>
                                    BUCHACAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#patas-isabella" aria-controls="patas" role="tab" data-toggle="tab">
                                <h3>
                                    PATAS
                                </h3>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#color-isabella" aria-controls="color" role="tab" data-toggle="tab">
                                <h3>
                                    COLOR
                                </h3>
                            </a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="tamano-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="9-ft" class="opcionTamano active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tamano/9_ft.gif" alt="">
                                        <p>
                                            9 FT.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="acabado-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="blue-lapis-stone" class="opcionAcabado active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/acabados/chestnut.gif" alt="">
                                        <p>
                                            Rosewood
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="piedra-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="blue-lapis-stone" class="opcionPiedras active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/piedras/finish-blue-lapis-stone.gif" alt="">
                                        <p>
                                            Blue Lapis Stone
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="fossil-stone" class="opcionPiedras">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/piedras/finish-fossil-stone.gif" alt="">
                                        <p>
                                            Fossil Stone
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="yellow-stone" class="opcionPiedras">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/piedras/finish-yellow-stone.gif" alt="">
                                        <p>
                                            Yellow Stone
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="buchacas-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionBuchacas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="patas-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="as-shown" class="opcionPatas active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/notfound.jpg" alt="">
                                        <p>
                                            Como se muestra
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="color-isabella">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" data-value="brunswick-green" class="opcionColor active">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/b_green.gif" alt="">
                                        <p>
                                            BRUNSWICK GREEN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="cardinal-red" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_red.gif" alt="">
                                        <p>
                                            CARDINAL RED
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="charcoal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/charcoal.gif" alt="">
                                        <p>
                                            CHARCOAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="chocolate-brown" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/c_brown.gif" alt="">
                                        <p>
                                            CHOCOLATE BROWN
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="ebony" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/ebony.gif" alt="">
                                        <p>
                                            EBONY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="gun-metal-grey" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/gm_grey.gif" alt="">
                                        <p>
                                            GUN METAL GREY
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="mcintosh" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/mcintosh.gif" alt="">
                                        <p>
                                            MCINTOSH
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="merlot" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/merlot.gif" alt="">
                                        <p>
                                            MERLOT
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="midnight-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/m_blue.gif" alt="">
                                        <p>
                                            MIDNIGHT BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="oceanside" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/oceanside.gif" alt="">
                                        <p>
                                            OCEANSIDE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="olive" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/olive.gif" alt="">
                                        <p>
                                            OLIVE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="regatta-blue" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/r_blue.gif" alt="">
                                        <p>
                                            REGATTA BLUE
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="sahara" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/sahara.gif" alt="">
                                        <p>
                                            SAHARA
                                        </p>
                                    </a>
                                </li>
                                <li role="presentation" data-value="timberline" class="opcionColor">
                                    <a href="#" role="tab" data-toggle="tab" onclick="return false;">
                                        <img src="<?php echo bloginfo('template_url').'/'; ?>img/modal/color/timberline.gif" alt="">
                                        <p>
                                            TIMBERLINE
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="img-ppl">
                        <div class="img-container">
                            <img class="mesa-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-8-ft-espresso-as-shown-as-shown-1.jpg" alt="">
                            <img class="tela-img" src="<?php echo bloginfo('template_url').'/'; ?>img/modal/tremont/tremont-cloth-brunswick-green.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

<!--/**********************************/-->

<!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->