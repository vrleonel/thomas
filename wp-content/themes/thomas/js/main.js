;(function(namespace, $){

  var Gallery = {
    init : function(){
    },

    loading: function(){
      $('#sprite').sprite({fps: 8, no_of_frames: 13, dir: 'left'});
    },

    fadein_unload: function(e){
      $("#loading").show().fadeIn(1000);
    },

    fade_page: function(){
      $("#wrapper").hide(0).fadeIn(1000);
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
      $(".nav-label").text(nav_text).fadeIn(500);
    },

    hide_label: function(){
      $(".nav-label").text('').fadeOut(250);
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


  var Scroll = {
    time: 1.25,
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
      $(".scroll-up").animate( {opacity: 0.3}, 250 );
      scroll_max  = $('html, body').height() - $(window).height();
      $('html, body').animate({ scrollTop: 0 }, (Scroll.actual() * Scroll.time));
    },

    down: function(){
      $(".scroll-down").animate( {opacity: 0.3}, 250 );
      $('html, body').animate({ scrollTop: Scroll.max() }, (   (Scroll.max()- Scroll.actual()) * Scroll.time ));

    },

    stop: function(){
      $(".scroll-down, .scroll-up").animate( {opacity: 0}, 250 );
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
      _this = this;

      $("a[data-open='modal']").on("click", function(e){

        e.preventDefault();
        href = $(this).attr('href');
        _this.status(href, $(this).attr('data-title'));

        $("#loading").fadeIn(500, function(){

          _this.hideFooter();

          $("#main").fadeOut(1000, function(){

            $("#main").load(href + " .single-gallery, .logo-v", function(responseTxt,statusTxt,xhr){
              if(statusTxt=="success"){
                _this.showPage();
                _this.init();
                //NavLinks.init();
                Scroll.init();
              }
            }).delay(1);
          });
        });
      });

      $("a[data-open='close']").on("click", function(e){
        e.preventDefault();
        href = $(this).attr('href');
        _this.status(href, $(this).attr('data-title'));

        $("#loading").fadeIn(500, function(){

          _this.showFooter();

          $("#main").fadeOut(1000, function(){

            $("#main").load(href + " .page-gallery, .logo-v", function(responseTxt,statusTxt,xhr){
              if(statusTxt=="success"){
                _this.showPage();
                _this.init();
              }
            }).delay(1);
          });

        });
      });
    },

    status: function(href, title){
      if(href!=window.location){
        window.history.pushState({path:href},'',href);
      }
      document.title = title;

    },

    showPage: function(){
      $("#main").fadeIn(1000);
      $("#loading").delay(1000).fadeOut(1000);
    },

    dataOpen: function(){
      $(".nav-links .prev a").attr("data-open", "modal");
      $(".nav-links .next a").attr("data-open", "modal");
    },

    hideFooter: function(){
      $("#footer").fadeOut("250");
    },

    showFooter: function(){
      $("#footer").fadeIn("250");
    },




  };




/**** INICIAR *****/

  $(document).ready(function(){
    //LoadingLinks.init();
    LoadGallery.init();
    Scroll.init();
    Gallery.loading();
    //NavLinks.init();
  });

  $(window).unload(function(){
     //Gallery.fadein_unload(this);
  });

  $(window).load(function(){
    Gallery.fade_page();
  });


})(window, jQuery);

