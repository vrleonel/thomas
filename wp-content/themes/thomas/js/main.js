;(function(namespace, $){

  var Gallery = {
    init : function(){
    },

    loading: function(){
      $('#sprite').sprite({fps: 8, no_of_frames: 13, dir: 'left'});
    },

    fadein_unload: function(e){
      $("#loading").show().fadeIn(500);
    },

    fade_page: function(){
      $("#wrapper").hide(0).delay(0).fadeIn(1000);
      $("#loading").delay(2000).fadeOut(1000, function(element) {

      });
    }
  };

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
  };

  var LoadingLinks = {
    init: function(){
        $("a").click(function(e){
        e.preventDefault();
        href = $(this).attr("href");
       $("#loading").fadeIn(1000, function(){
        window.location = href;
      });
     });
    }

  };

  var ScrollMouse = {
    move: window.pageYOffset || document.documentElement.scrollTop,
    init: function(){

      $(".scroll-down").on({
        mouseover: function(){
          ScrollMouse.down();
        },
        click: function() {
         ScrollMouse.down();
        }
      });

      $(".scroll-up").on({
        mouseover: function(){
          ScrollMouse.up();
        },
        click: function() {
          ScrollMouse.up();
        }
      });

      ScrollMouse.scrolling();
    },

    up: function(){
      ScrollMouse.move = ((ScrollMouse.move - 500) < 0) ? 0 : ScrollMouse.move - 500 ;
      $('html, body').animate({ scrollTop: ScrollMouse.move }, 500);
    },

    down: function(){
      scroll_max  = $('html, body').height() - $(window).height();
      ScrollMouse.move = ((ScrollMouse.move + 500) > scroll_max) ? scroll_max : ScrollMouse.move + 500;
      $('html, body').animate({ scrollTop: ScrollMouse.move }, 500);
    },

    scrolling: function(){
      $(document).scroll(function(){
        ScrollMouse.move = window.pageYOffset || document.documentElement.scrollTop;
      });
    }
  };

  var Scroll = {
    init: function(){

      //img.next()

      $(".scroll-down").on({
        mouseenter: function(){
          Scroll.down();
        },
        mouseleave: function(){
          Scroll.stop();
        }
      });

      $(".scroll-up").on({
        mouseenter: function(){
          Scroll.up();
        },
         mouseleave: function(){
          Scroll.stop();
        }
      });
    },

    up: function(){
      $(".scroll-up").animate( {opacity: 0.3}, 100 );
      scroll_max  = $('html, body').height() - $(window).height();
      $('html, body').animate({ scrollTop: 0 }, (Scroll.actual()) , 'easeOutBounce');
    },

    down: function(){
      $(".scroll-down").animate( {opacity: 0.3}, 100 );
      $('html, body').animate({ scrollTop: Scroll.max() }, (Scroll.max()- Scroll.actual()), 'easeOutBounce' );

    },

    stop: function(){
      $(".scroll-down, .scroll-up").animate( {opacity: 0}, 100 );
      $('html, body').stop();
    },

    actual: function (){
      return window.pageYOffset || document.documentElement.scrollTop;
    },

    max: function(){
      return $('html, body').height() - $(window).height();
    }
  };


/** Loading via AJAX **/
  var LoadGallery = {
    init: function(){
      $("a[rel='modal']").click(function(e){
        e.preventDefault();

        href = $(this).attr('href');

        Gallery.fadein_unload();
        $("#loading").css("opacity", ".80");
        $("#main").fadeOut(1000, function(){
          $("#main").load(href + " .single-gallery", function(e){

            $("#main").append("<div class='temp'></div>")
            $(".temp").html(e);
            console.log($(".temp"));

            $("#main").fadeIn(1500);
            $("#loading").delay(1000).fadeOut(2000);

            //debugger;
          }).delay(1000);
        });



      });
    }
  };




/**** INICIAR *****/

  $(document).ready(function(){
    LoadingLinks.init();
    //LoadGallery.init();
    Scroll.init();
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

