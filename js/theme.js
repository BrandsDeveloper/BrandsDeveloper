window.onload = () => {

    
    window.addEventListener('scroll', () => {
        
        if( document.querySelector('.actived.nav-link span').textContent == 'Habilidades' ) {
            
            setTimeout( () => {
                
                let skillBar = document.querySelectorAll('.progress-bar');
                skillBar.forEach( function(value){
                    let width = value.getAttribute('data-width');
                    value.style.width = width;
                });
                
                console.log('Foiii o width');
            }, 2000);
            clearTimeout;
        }

    })


    
    new Typed('#mudar', {
        strings: ['Web Developer', 'Front-End', 'Freelancer', 'Computer Technician'],
        typeSpeed: 80,
        backSpeed: 80,
        smartBackspace: true, // this is a default
        loop: true
    });
    
    ScrollReveal().reveal('.container', {
        delay: 700,
        duration: 1500,
        distance: '30px',
        desktop: true,
        mobile: true,
    });
    
    
    (function () {
        'use strict';
        
        var section = document.querySelectorAll("section");
        var sections = {};
        var i = 0;
        
        Array.prototype.forEach.call(section, function (e) {
            sections[e.id] = e.offsetTop;
        });
        
        window.onscroll = function () {
            var scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;
            
            for (i in sections) {
                if (sections[i] <= scrollPosition) {
                    document.querySelector('.actived').setAttribute('class', 'nav-link mx-auto mx-md-0');
                    document.querySelector('a[href*=' + i + ']').setAttribute('class', 'actived nav-link mx-auto mx-md-0');
                }
            }
        };
    })();
    
    $('#header nav ul li a').click(function () {
        $('#header nav ul li a').removeClass('actived');
        $(this).addClass('actived');
    });
    
    var $grid = $('#port').isotope({
        itemSelector: '.port_itens',
        layoutMode: 'fitRows',
    });

    // bind filter button click
    $('#filters').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
    });

    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt( number, 10 ) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match( /ium$/ );
        }
    };

    // bind filter button click
    $('#filters').on( 'click', 'button', function() {
        var filterValue = $( this ).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[ filterValue ] || filterValue;
        $grid.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('#filters').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $( this ).addClass('is-checked');
        });
    });
}