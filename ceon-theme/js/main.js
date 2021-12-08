
jQuery(document).ready(function () {
    jQuery('.sidenav').sidenav({
        draggable:true
    });
});


jQuery(".dropdown-trigger").dropdown({
    coverTrigger: false,
    constrainWidth: false
});

jQuery(document).ready(function () {
    jQuery('.collapsible').collapsible();
});

//////////////////SLIDERS/////////////////
// HERO SLIDER

jQuery('.hero-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 0
});

jQuery('.scrollspy').scrollSpy({
    throttle:2
});

setInterval(() => jQuery('.hero-slider').carousel('next'), 15000);


// SUCCESS STORIES SLIDER
jQuery('#stories-slider').owlCarousel({
    items: 3,
    loop: true,
    nav: false,
    dot: true,
    autoplay: true,
    autoplaySpeed: 1000,
    slideTransition: 'linear',
    margin: 20,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 3
        }
    }
})

////////////////////////////////////////
// FAQ LANDING PAGE
jQuery(document).ready(function() {
    jQuery('.faq-landing-page').collapsible();
});



AOS.init({
	offset: 120,
	delay: 0,
	duration: 1200,
	easing: 'ease',
	once: false,
	mirror: false,
	anchorPlacement: 'top-bottom',
	disable: 'mobile'
});



jQuery.expr[":"].contains = jQuery.expr.createPseudo(function(arg) {
    return function( elem ) {
     return jQuery(elem).text().toUpperCase().indexOf(arg.toUpperCase()) >= 0;
    };
  });

jQuery("#search-contact").on("keyup", function (){
         
        // Search text
        var text = jQuery(this).val().toLowerCase();
    
        let term = [];
        if (text) terms = text.split(' ');
        // Hide all content class element
        jQuery('.member-contact').hide();
    
        // Search 
        jQuery('.member-contact').each(function(){         
            
            let current = this;
            let result = true; 

            if (text) {
                terms.forEach( (term, index)=>{
                    result &= (jQuery(this).text().toLowerCase().indexOf("" + term + "") != -1 );
                });
            }

            if (result) {
                jQuery(this).closest('.member-contact').slideDown();
            }
        });
        

});

jQuery(".mec-toggle-title").css("font-size","1.2em");

let btn = jQuery(".forminator-button"); 
btn.addClass("btn grey lighten-4 black-text");
btn.removeClass("forminator-button");
btn.removeClass("forminator-button-submit");
