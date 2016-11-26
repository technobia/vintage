$(document).ready(function(){
    initBrandSlider();
});

function initBrandSlider(width) {
    width = width || $(window).width();
    width = width * 0.8;

    $("#brands-slide").rotate({
        speed: 15,
        width: '' + width + 'px'
    });
}