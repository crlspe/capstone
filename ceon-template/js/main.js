
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

