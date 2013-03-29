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

  $(document).ready(function(){ Gallery.loading() });
  $(window).load(function(){ Gallery.fade_page()});

})(window, jQuery);

