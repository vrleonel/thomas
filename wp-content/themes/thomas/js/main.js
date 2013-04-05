;(function(namespace, $){

  var Gallery = {
    init : function(){
    },

    loading: function(){
      // init = $.now();
      // console.log(0);
      // sp_height = $("#sprite").height();
      // sp_width  = $("#sprite").width();

      // $('#sprite').css('top',($(window).height()/2 - sp_height) ).css('left',($(window).width()/2 - sp_width));
      $('#sprite').sprite({fps: 8, no_of_frames: 8})


    },

    fade_page: function(){
      // console.log($.now()-init);
      $("#wrapper").hide(0).delay(0).fadeIn(1000);
      $("#loading").delay(2000).fadeOut(1000, function(element) {

      });
    }
  }

  var NavLinks = {
    init : function(){
		$(".nav-links a").hover(function(){
			NavLinks.hide_label();
			nav_text = $(this).attr('rel');
			NavLinks.show_label(nav_text)
			
			
		}, function(){
			NavLinks.hide_label();
		});
    },


    show_label: function(nav_text){
    	$(".nav-label").hide();
    	$(".nav-label").text(nav_text).fadeIn(100);
    },

    hide_label: function(){
    	$(".nav-label").text('').fadeOut(100);
    }
  }



  $(document).ready(function(){ 
  	Gallery.loading() 
  	NavLinks.init();
  });
  $(window).load(function(){ Gallery.fade_page()});

})(window, jQuery);

