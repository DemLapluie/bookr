
    var active = false;
    var scroll = true;

    $('#burger_menu').on('click',function(){
        /* ON bloque le scroll quand le menu bureger est ouvert */
        if(scroll == true){
            window.onscroll = function () {
                window.scrollTo(0, 0);
            }

            scroll = false;
        }else if(scroll == false){
            window.onscroll = function () {

            }
            scroll = true;
        }


        if(active === false){
            $('#burger_menu div').css({
                'display': 'none'
            });

            $('#burger_menu > div:first-child').css({
                'display': 'block',
                'transform': 'rotateZ(-45deg)',
                'margin-top': '12px'
            });

            $('#burger_menu > div:last-child').css({
                'display': 'block',
                'transform': 'rotateZ(45deg)',
                'margin-top': '-12px'
            });

            $('.burger_nav').css({
                height : '100%'
            });

            active = true;
        }else {
            $('.burger_nav').css({
                'height' : '0'
            });

            $('#burger_menu div').css({
                'display': 'block',
                'margin-top' : '0'
            });


            $('#burger_menu > div:first-child').css({
                'transform': 'rotateZ(0deg)',

            });

            $('#burger_menu > div:last-child').css({
                'transform': 'rotateZ(0deg)',

            });

            active = false;
        }
    });

    $('.burger_nav > ul > li > a').on('click',function(){

        $('this > .sous_menu').css({'display' : 'block'})


    });



