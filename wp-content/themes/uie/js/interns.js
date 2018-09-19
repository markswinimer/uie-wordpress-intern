$(document).ready(function($) {

      var hash = window.location.hash;

      $(window).on('hashchange', function(e) {
        hash = window.location.hash;
        $(hash).parent().show();
        $('a[href="'+ hash +'"]')[0].click();
      });

      // Hide contents upon loading
      $('.accordion-content').hide();
      $('#accordion').find('.accordion-toggle').click(function(e){
        var open = ($(this).next().css("display") == "block");
        //Expand or collapse this panel
        $(this).next().slideToggle('slow');
        //only scroll to header if panel is closed
        if (!open) {
          $.smoothScroll({
            scrollTarget: "#" + $(e.target).attr("id")
          });
        }
      });

    if(hash !== '') {
      $(window).trigger('hashchange');
    }
    });
