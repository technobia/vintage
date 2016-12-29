$(document).ready(function(){
    initBrandSlider();
    initPrettyPhoto();
    initMagnifyZoomImage();
});

function initBrandSlider(width) {
    width = width || $(window).width();
    width = width * 0.8;

    $("#brands-slide").rotate({
        speed: 15,
        width: '' + width + 'px'
    });
}

function initPrettyPhoto() {
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools: '',
        markup: '<div class="pp_pic_holder_wrapper" style="position: absolute; top:0;left:0;right:0;bottom:0;overflow-x:hidden;overflow-y: auto;z-index:9999"><div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<div class="pp_top"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"></div> \
						</div> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<a href="#" class="pp_expand" title="Expand the image">Expand</a> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#">next</a> \
											<a class="pp_previous" href="#">previous</a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous">Previous</a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next">Next</a> \
											</div> \
											<p class="pp_description"></p> \
											{pp_social} \
											<a class="pp_close" href="#">Close</a> \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
						<div class="pp_bottom"> \
							<div class="pp_left"></div> \
							<div class="pp_middle"></div> \
							<div class="pp_right"></div> \
						</div> \
					</div> \
					<div class="pp_overlay"></div></div>',
        callback: function() {
            $('.pp_pic_holder_wrapper').remove();
        }
    });
}

function initMagnifyZoomImage() {
    if (!$('#thumb').length) return;

    var evt = new Event(),
        m = new Magnifier(evt);

    m.attach({
        thumb: '#thumb',
        mode: 'inside',
        zoomable: true
    });
}