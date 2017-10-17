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
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
