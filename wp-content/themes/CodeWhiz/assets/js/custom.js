var $ = jQuery.noConflict();
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        smartSpeed: 1000,
        dots: true,
        nav: false,
    });
    
    $('.counter span').counterUp({
        delay: 10,
        time: 2000
    });

    $('#load_more_cars').on('click', function(){
        var ajaxurl = ajax_object.ajaxurl;
        var page = parseInt($('#page_number').val());
        var ppp = $('#post_per_page').val();
        newOffset = page+1;
        jQuery.ajax({
			type: "POST",
			url: ajaxurl,
			dataType: 'JSON',
			data: ({
				action: "load_more_cars",
				offset: newOffset,
				post_per_page: ppp,
			}),
			success: function(response){
                console.log(response.success)
				if (response.success){ 
					// blank output
					jQuery('.noMorePostsFound').show();
					$('#paginations').append(response.result);
					$('#page_number').val(newOffset);

					if(!response.loadMoreButton){
						$('#load_more_cars').hide();
					}
				}else{
					// append to last div
					jQuery(response).insertAfter(jQuery('.loadMoreRepeat').last());
					jQuery('input[name="offset"]').val(newOffset);
					jQuery('.btnLoadmoreWrapper').show();
				}
			},
			beforeSend: function() {
				jQuery('.dcsLoaderImg').show();
			},
			complete: function(){
				jQuery('.dcsLoaderImg').hide();
			},
		});

        console.log(ajaxurl, page, ppp)
    });
});



