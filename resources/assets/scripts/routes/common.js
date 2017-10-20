export default {
  init() {
    /**
     * Header change on scroll
     */
    $(window).bind('scroll', function(){
      $(".second-hashtag").toggleClass('elem-hidden',$(this).scrollTop() <= 200);
      $(".first-hashtag").toggleClass('elem-hidden',$(this).scrollTop() > 200);
      $(".top").toggleClass('top-shadow',$(this).scrollTop() > 1);
    });

    /**
     * Mobile menu toggle
     */
    $(".menu-trigger a").on('click', function(e) {
      e.preventDefault();
      $(".menu").toggleClass('menu-slided');
    });

    /**
     * Load some pages on modals
     */
    $(".load-modal").on('click', function(e) {
      e.preventDefault();

      const modalTitle = $(this).data('title');
      const container = $(this).data('container');
      const loadUrl = $(this).attr('href') + ' #' + container;

      $('#pageModal .modal-title').text(modalTitle);
      $('#pageModal .modal-body').load(loadUrl, function() {
        $('#pageModal').modal();
      });
    });

    /**
     * Sign form
     */
    $(".main-input input").on('focus', function() {
      $(this).parent().addClass('main-input-active');
    });

    $(".main-input input").on('blur', function() {
      if(!$(this).val()) {
        $(this).parent().removeClass('main-input-active');
      }
    });

    $("input[name=type]").on('change', function() {
      const value = $(this).val();

      if(value == 'organization') {
        $(".visible-individual").hide();
        $(".visible-organization").show();
        $("#isPublic").attr('checked', true);
      } else {
        $(".visible-individual").show();
        $(".visible-organization").hide();
      }
    });

    $("#signAction").on('submit', function(e) {
      e.preventDefault();

      const form = $(this);
      const url = form.attr('action');
      const data = form.serialize();

      $.ajax({
        url,
        method: 'POST',
        data,
        dataType: 'json',
      }).done(function(response) {
        if(response.status == 'OK') {
          $("#signAction").slideUp();
          $("#signSuccess").slideDown();
          $("#signSuccess h4").focus();
          $("#type1").attr('checked', true);
          $("#type2").attr('checked', false);
          $("#name").val('');
          $("#email").val('');
          $("#isPublic").attr('checked', false);
        } else {
          response.errors.forEach(function(error) {
            $("#" + error.input).addClass('is-invalid').focus();
            $("#" + error.input + "Help").text(error.message);
          });
        }
      }).error(function() {
        alert('error');
      });
    });

    // Select all links with hashes
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
          &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top,
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            });
          }
        }
      });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
