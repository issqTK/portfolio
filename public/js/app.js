$.when( $.ready ).then(function() {

    if(sessionStorage.dark) {
        darkenLighten();      
    }

    $( '#dark' ).click( function() {
        sessionStorage.setItem("dark", true);       
       
        darkenLighten();
    } );
    
    $( '#light' ).click( function() {
        sessionStorage.setItem("dark", false);        

        darkenLighten();
    } );

    $( "#icon-nav" ).on( "click", function() {
        var nav = $('#nav');
        nav.toggleClass('opened');
        
        if(nav.hasClass('opened')) {
            nav.slideDown( "slow");
            $('#main').fadeOut('fast');
            $('#close').slideDown('fast');    
            $('#open').slideUp('fast');
        }
        else {
            nav.fadeOut('fast');
            $('#main').fadeIn('slow');
            $('#close').slideUp('fast');
            $('#open').slideDown('fast');  
        }
    });

    showWork();

    $(window)
    .on('resize', function() { showWork() });
});

function showWork() {
    if( $( window ).width() >= 768 )
    {
        $('#work a').on( "mouseenter", function() {
            let source = $( this ).attr('source');

            $('#displayer')
                .css('background-image', 'url(/images/work/preview/' + source + ')')
                .css('background-position', 'center')
                .stop()
                .animate({
                    opacity: 1,
                }, 500 );
        
        } ).on( "mouseleave", function() {
            $('#displayer')
            .stop()
            .animate({
                opacity: 0,
            }, 100 );
        } );
    }
}

function darkenLighten() {
    var dark = sessionStorage.dark;

    if(dark == 'true') {
        $( '#light' ).slideDown('fast');
        $( '#dark' ).slideUp('fast');

        $( 'body' )
        .removeClass( 'lightBG lightColor' )
        .addClass( 'darkBG darkColor' );

        $( 'a' ).css('color', '#f3f2f9');

        $( '#open > span' )
        .removeClass( 'border-light' )
        .addClass( 'border-dark' );

        if( $( '#close ' ).hasClass( 'icon-nav-close' ) )
        $( '#close ' ).removeClass( 'icon-nav-close' ).addClass( 'icon-nav-close-light' )

        if( $( '#nav > div:last-child' ).hasClass('light-bg-nav') )
        $( '#nav > div:last-child' ).removeClass('light-bg-nav').addClass('dark-bg-nav')

        $( '#new' ).removeClass( 'darkBG darkColor' ).addClass( 'lightBG lightColor' )

        $( '#nav-illustration > img' ).attr('src', '/images/ballon-light.png')

        $( '#logo img' ).attr('src', '/images/logo-light.png');

    } 

    else {
        $( '#light' ).slideUp('fast');
        $( '#dark' ).slideDown('fast');

        $( 'body' )
        .removeClass( 'darkBG darkColor' )
        .addClass( 'lightBG lightColor' );

        $( 'a' ).css('color', '#606887');

        $( '#open > span' )
        .removeClass( 'border-dark' )
        .addClass( 'border-light' );

        if( $( '#close ' ).hasClass( 'icon-nav-close-light' ) )
        $( '#close ' ).removeClass( 'icon-nav-close-light' ).addClass( 'icon-nav-close' );

        if( $( '#nav > div:last-child' ).hasClass('dark-bg-nav') )
        $( '#nav > div:last-child' ).removeClass('dark-bg-nav').addClass('light-bg-nav')

        $( '#new' ).removeClass( 'lightBG lightColor' ).addClass( 'darkBG darkColor' )

        $( '#nav-illustration > img' ).attr('src', '/images/ballon.png')

        $( '#logo img' ).attr('src', '/images/logo.png');
    }
    
}
