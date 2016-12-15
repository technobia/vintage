$(document).ready(function(){
    initBrandSlider();
    initElevateZoom();
});

function initBrandSlider(width) {
    width = width || $(window).width();
    width = width * 0.8;

    $("#brands-slide").rotate({
        speed: 15,
        width: '' + width + 'px'
    });
}

function initJqueryZoom() {
    var _$element = $('[data-action="zoom"]');
    var srcImg = _$element.attr('src');
    _$element.zoom({url: srcImg});
}

function initElevateZoom() {
    var _$element = $('[data-action="elevatezoom"]');
    _$element.elevateZoom({
        cursor: "crosshair",
        tint: true,
        tinColour: '#F90',
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750,
        zoomWindowPosition: 11,
        zoomWindowWidth: 300,
        zoomWindowHeight: 360
    });
}