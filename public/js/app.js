$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    // navText:["PREV","NEXT"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})

// lightgarellery js
lightGallery(document.getElementById('lightgallery'), {
    plugins: [lgZoom, lgThumbnail],
    licenseKey: 'your_license_key',
    speed: 500,
    // ... other settings
});