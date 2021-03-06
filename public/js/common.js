$(document).ready(function() {

    var isWider = $( '.wider' );
    isWider.next( '.container' ).addClass( 'push-down' );

    if(isWider.length) {
        $( window ).scroll(function() {

            var tp = $( 'body' ).scrollTop();

            if(tp > 50) {

                $( '.navbar' ).removeClass( 'wider') ;
            }
            else if(tp < 50) {
        
                $( '.navbar' ).addClass( 'wider') ;
            }
        }); 
    }

	// Hide all abstracts after pafe load    
    $( '.journal-article-list-abstract' ).hide();
    $( ".trigger-abstract" ).click(function() {
   		
   		var id = $(this).attr('id').replace('display_', 'abstract_')
    	$( '#' + id ).slideDown('slow');
    });

    $( '#togglePast' ).change(function() {

    	if($(this).is(":checked")) {

			$( '#type' ).val('.*');
    	}
    	else {

			$( '#type' ).val('^$|^honorary$');
    	}
    });

    var hloc = window.location.href;
    if(hloc.match('#')){

        var jumpLoc = $( '#' + hloc.split("#")[1] ).offset().top - 105;

        $("html, body").animate({scrollTop: jumpLoc}, 1000);
    }
});


// Masonry layout

jQuery(window).load(function () {



    // Takes the gutter width from the bottom margin of .post

    var gutter = parseInt(jQuery('.post').css('marginBottom'));
    var container = jQuery('#posts');



    // Creates an instance of Masonry on #posts

    container.masonry({
        gutter: gutter,
        itemSelector: '.post',
        columnWidth: '.post'
    });
    
    
    
    // This code fires every time a user resizes the screen and only affects .post elements
    // whose parent class isn't .container. Triggers resize first so nothing looks weird.
    
    jQuery(window).bind('resize', function () {
        if (!jQuery('#posts').parent().hasClass('container')) {
            
            
            
            // Resets all widths to 'auto' to sterilize calculations
            
            post_width = jQuery('.post').width() + gutter;
            jQuery('#posts, body > #grid').css('width', 'auto');
            
            
            
            // Calculates how many .post elements will actually fit per row. Could this code be cleaner?
            
            posts_per_row = jQuery('#posts').innerWidth() / post_width;
            floor_posts_width = (Math.floor(posts_per_row) * post_width) - gutter;
            ceil_posts_width = (Math.ceil(posts_per_row) * post_width) - gutter;
            posts_width = (ceil_posts_width > jQuery('#posts').innerWidth()) ? floor_posts_width : ceil_posts_width;
            if (posts_width == jQuery('.post').width()) {
                posts_width = '100%';
            }
            
            
            
            // Ensures that all top-level elements have equal width and stay centered
            
            jQuery('#posts, #grid').css('width', posts_width);
            // jQuery('#posts').css({'margin-left': '-20px'});
                
        
        
        }
    }).trigger('resize');
    
$("#footnote1").hover( 
            function() { 
                $("#footnote1-text").show(); 
            }, 
            function() { 
                $("#footnote1-text").hide(); 
            } 
        ); 

$("#footnote2").hover( 
            function() { 
                $("#footnote2-text").show(); 
            }, 
            function() { 
                $("#footnote2-text").hide(); 
            } 
        ); 
$("#footnote3").hover( 
            function() { 
                $("#footnote3-text").show(); 
            }, 
            function() { 
                $("#footnote3-text").hide(); 
            } 
        ); 
});
