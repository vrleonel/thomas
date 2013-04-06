;(function(namespace, $){

  var Gallery = {
    init : function(){
    },

    loading: function(){
      $('#sprite').sprite({fps: 8, no_of_frames: 8, dir: 'left'})
    },

    fadein_unload: function(e){
      $("#loading").show().fadeIn(500);
    },

    fade_page: function(){
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
			NavLinks.show_label(nav_text);

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

  var LoadingLinks = {
  	init: function(){
  		$("a").click(function(e){
  			e.preventDefault();
  			href = $(this).attr("href");
 				$("#loading").fadeIn(1000, function(){
 					window.location = href;
 				})
  		})
  	}

  }

  var ScrollMouse = {

    init: function(){
      scroll_move = window.pageYOffset || document.documentElement.scrollTop;

      function scrollUp(){
        scroll_move = ((scroll_move - 500) < 0) ? 0 : scroll_move - 500 ;
        $('html, body').animate({ scrollTop: scroll_move }, 500);
      }
      function scrollDown(){
        scroll_max  = $('html, body').height() - $(window).height();
        scroll_move = ((scroll_move + 500) > scroll_max) ? scroll_max : scroll_move + 500;
        $('html, body').animate({ scrollTop: scroll_move }, 500);
      }

      $(".scroll-down").on({
        mouseover: function(){
          scrollDown();
        },
        click: function() {
          scrollDown();
        }
      });

      $(".scroll-up").on({
        mouseover: function(){
          scrollUp();
        },
        click: function() {
          scrollUp();
        }
      });

      $(document).scroll(function(){
        scroll_move = window.pageYOffset || document.documentElement.scrollTop;
      });
    },


  }


  $(document).ready(function(){
  	LoadingLinks.init();
    ScrollMouse.init();
  	Gallery.loading();
  	NavLinks.init();
  });

  $(window).unload(function(){
     Gallery.fadein_unload(this);
  });

  $(window).load(function(){
    Gallery.fade_page();
  });


})(window, jQuery);

