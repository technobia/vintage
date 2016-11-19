$(document).ready(function(){
    initBrandSlider();
});

function initBrandSlider(width) {
    width = width || $(window).width();

    $("#brands-slide").rotate({
        speed: 15,
        width: '' + width + 'px'
    });
}