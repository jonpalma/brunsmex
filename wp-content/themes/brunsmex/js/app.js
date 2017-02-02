$(window).scroll(function () {
    if ($(window).scrollTop() >= '115' && !$('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').addClass('navbar-fixed-top');
    } else if ($(window).scrollTop() < '115' && $('.navbar').hasClass('navbar-fixed-top')) {
        $('.navbar').removeClass('navbar-fixed-top');
    }
});

$('.navbar-nav a').click(function() {
    $('.navbar-nav a').removeClass('active');
    $(this).addClass('active');
});

$('li.dropdown a').on('click', function (event) {
    $('li.dropdown.dropdown-submenu').removeClass('open');
    $(this).parent().toggleClass('open');
});

$('body').on('click', function (e) {
    if (!$('li.dropdown').is(e.target) 
        && $('li.dropdown').has(e.target).length === 0 
        && $('.open').has(e.target).length === 0
       ) {
        $('li.dropdown').removeClass('open');
    }
});

$("#bttnMapa").click(function() {
    $("iframe").css('pointer-events', 'all');
});





/***** MODLAS *****/
var mesa,
    modalId,
    tamanoId,
    acabadoId,
    piedraId,
    buchacasId,
    patasId,
    colorId;


$(".btn.cotiza").click(function() {
    var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
    var acabado = $(modalId + ' ' + acabadoId + ' .active').data('value');
    var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
    var patas = $(modalId + ' ' + patasId + ' .active').data('value');
    var src = $('.mesa-img').attr('src'),
        route = 'img/modal/',
        imgJPG = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';
    
    var color = $(modalId + ' ' + colorId + ' .active').data('value');
    var src = $('.tela-img').attr('src'),
        route = 'img/modal/',
        imgPNG = src.split(route)[0] + route + mesa + '/' + mesa + '-cloth-' + color + '.png';



    var c = document.getElementById("myCanvas");
    var ctx = c.getContext("2d");
    var imageObj1 = new Image();
    var imageObj2 = new Image();
    imageObj1.src = imgJPG;

    imageObj1.onload = function()
    {   
        ctx.drawImage(imageObj1, 0, 0, 1740, 945);   
        imageObj2.src = imgPNG;   

        imageObj2.onload = function()
        {      
            ctx.drawImage(imageObj2, 0, 0, 1740, 945);      
            var img = c.toDataURL("image/png");      
            $(document).html('<img src="' + img + '" width="1740" height="945"/>'); 
        }
    };
});


$('button.bttnMesa').click(function() {
    mesa = $(this).data('value').toLowerCase();
    modalId = '#modal-' + mesa;
    tamanoId = '#tamano-' + mesa;
    acabadoId = '#acabado-' + mesa;
    piedraId = '#piedra-' + mesa;
    buchacasId = '#buchacas-' + mesa;
    patasId = '#patas-' + mesa;
    colorId = '#color-' + mesa;


    $(modalId + ' .opcionColor').click(function() {
        var color = $(this).data('value');
        var src = $(".tela-img").attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-cloth-' + color + '.png';

        $(".tela-img").attr('src', new_img);
    });


    $(modalId + ' .opcionTamano').click(function() {
        /***** GLENWOOD *****/
        if(($(this).data('value') == '7-ft') && mesa == 'glenwood')
        {
            if(($(modalId + ' ' + tamanoId + ' .active').data('value') != 'chestnut')
               || ($(modalId + ' ' + tamanoId + ' .active').data('value') != 'espresso'))
            {
                resetOptions();
                cargaMesa();
                cargaTela();
            }
            else 
            {
                show7ft();
                hidde8ft();
            }

        }

        if(($(this).data('value') == '8-ft') && mesa == 'glenwood')
        {
            $(modalId + ' .8-ft').removeClass('hidden');
        }

        /***** ALLENTON *****/
        if(($(this).data('value') == '7-ft') && mesa == 'allenton')
        {
            if(($(modalId + ' ' + tamanoId + ' .active').data('value') != 'chestnut')
               || ($(modalId + ' ' + tamanoId + ' .active').data('value') != 'espresso')
               || ($(modalId + ' ' + tamanoId + ' .active').data('value') != 'traditional-cherry'))
            {
                resetOptions();
                cargaMesa();
                cargaTela();
            }
            else 
            {
                show7ft();
                hidde8ft();
            }

        }

        if(($(this).data('value') == '8-ft') && mesa == 'allenton')
        {
            $(modalId + ' .8-ft').removeClass('hidden');
        }

        /***** METRO *****/
        if(($(this).data('value') == '8-ft') && mesa == 'metro')
        {
            $(modalId + ' ' + acabadoId + ' li').addClass('hidden');
            $(modalId + ' ' + acabadoId + ' li').removeClass('active');
            $(modalId + ' ' + acabadoId + ' .matte-black-nickel-trim').removeClass('hidden');
            $(modalId + ' ' + acabadoId + ' .matte-black-nickel-trim').addClass('active');
        }

        if(($(this).data('value') == '9-ft') && mesa == 'metro')
        {
            $(modalId + ' .9-ft').removeClass('hidden');
        }

        /***** ISABELLA *****/
        if(mesa == 'isabella')
        {
            $(modalId + ' ' + piedraId + ' li').removeClass('active');
            $(modalId + ' ' + piedraId + ' ul').find('li:first').addClass('active');
        }

        var tamano = $(this).data('value');
        var acabado = $(modalId + ' ' + acabadoId + ' .active').data('value');
        var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
        var patas = $(modalId + ' ' + patasId + ' .active').data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    });


    $(modalId + ' .opcionAcabado').click(function() {
        /***** GLENWOOD *****/
        if(($(this).data('value') == 'tuscana') && mesa == 'glenwood')
        {
            $(modalId + ' ' + patasId + ' li').addClass('hidden');
            $(modalId + ' ' + patasId + ' li').removeClass('active');
            $(modalId + ' ' + patasId + ' .tuscana').removeClass('hidden');
            $(modalId + ' ' + patasId + ' ul').find('li.tuscana:first').addClass('active');
        }

        if(($(this).data('value') == 'matte-black-chestnut') && mesa == 'glenwood')
        {
            $(modalId + ' ' + patasId + ' li').addClass('hidden');
            $(modalId + ' ' + patasId + ' li').removeClass('active');
            $(modalId + ' ' + patasId + ' .matte-black-chestnut').removeClass('hidden');
            $(modalId + ' ' + patasId + ' ul').find('li.matte-black-chestnut:first').addClass('active');
        }

        if((($(this).data('value') == 'chestnut') || ($(this).data('value') == 'espresso')) && mesa == 'glenwood')
        {
            show7ftPatas();
        }

        /***** ALLENTON *****/
        if((($(this).data('value') == 'tuscana') || ($(this).data('value') == 'driftwood')) && mesa == 'allenton')
        {
            $(modalId + ' ' + patasId + ' li').addClass('hidden');
            $(modalId + ' ' + patasId + ' li').removeClass('active');
            $(modalId + ' ' + patasId + ' .tuscana-driftwood').removeClass('hidden');
            $(modalId + ' ' + patasId + ' ul').find('li.tuscana-driftwood:first').addClass('active');
        }

        if((($(this).data('value') == 'chestnut') || ($(this).data('value') == 'espresso') || ($(this).data('value') == 'traditional-cherry')) && mesa == 'allenton')
        {
            show7ftPatas();
        }

        /***** ISABELLA *****/
        if(mesa == 'isabella')
        {
            $(modalId + ' ' + piedraId + ' li').removeClass('active');
            $(modalId + ' ' + piedraId + ' ul').find('li:first').addClass('active');
        }


        var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
        var acabado = $(this).data('value');
        var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
        var patas = $(modalId + ' ' + patasId + ' .active').data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    });


    $(modalId + ' .opcionPiedras').click(function() {
        var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
        var piedra = $(this).data('value');
        var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
        var patas = $(modalId + ' ' + patasId + ' .active').data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + piedra + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    });


    $(modalId + ' .opcionBuchacas').click(function() {
        var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
        var acabado = $(modalId + ' ' + acabadoId + ' .active').data('value');
        var buchacas = $(this).data('value');
        var patas = $(modalId + ' ' + patasId + ' .active').data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    });


    $(modalId + ' .opcionPatas').click(function() {
        var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
        var acabado = $(modalId + ' ' + acabadoId + ' .active').data('value');
        var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
        var patas = $(this).data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    });


    $(modalId + '.fade').on('hidden.bs.modal', function (e) {
        resetOptions();
    });


    $(modalId + '.fade').on('show.bs.modal', function (e) {
        cargaMesa();
        cargaTela();
    });


    function show7ft() {
        $(modalId + ' li').removeClass('hidden');
    };


    function show7ftPatas() {
        $(modalId + ' ' + patasId + ' li').removeClass('hidden');
    };


    function hidde8ft() {
        $(modalId + ' .8-ft').addClass('hidden');
    };


    function cargaMesa() {
        var tamano = $(modalId + ' ' + tamanoId + ' .active').data('value');
        var acabado = $(modalId + ' ' + acabadoId + ' .active').data('value');
        var buchacas = $(modalId + ' ' + buchacasId + ' .active').data('value');
        var patas = $(modalId + ' ' + patasId + ' .active').data('value');
        var src = $('.mesa-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-' + tamano + '-' + acabado + '-' + buchacas + '-' + patas + '-1' + '.jpg';

        $('.mesa-img').attr('src', new_img);
    };


    function cargaTela() {
        var color = $(modalId + ' ' + colorId + ' .active').data('value');
        var src = $('.tela-img').attr('src'),
            route = 'img/modal/',
            new_img = src.split(route)[0] + route + mesa + '/' + mesa + '-cloth-' + color + '.png';

        $('.tela-img').attr('src', new_img);
    };


    function resetOptions() {
        $(modalId + ' li').removeClass('active');
        $(modalId + ' li').removeClass('hidden');
        $(modalId + ' .tab-pane').removeClass('in');
        $(modalId + ' .tab-pane').removeClass('active');
        $(modalId + ' li:nth-of-type(1)').addClass('active');
        $(modalId + ' .tab-pane:nth-of-type(1)').addClass('in active');
        $(modalId + ' .8-ft').addClass('hidden');
        $(modalId + ' .9-ft').addClass('hidden');
    };
});


