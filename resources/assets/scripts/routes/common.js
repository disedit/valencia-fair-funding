export default {
  init() {
    $(".main-input input").on('focus', function() {
      $(this).parent().addClass('main-input-active');
    });

    $(".main-input input").on('blur', function() {
      if(!$(this).val()) {
        $(this).parent().removeClass('main-input-active');
      }
    });

    $(window).bind('scroll', function(){
      $(".hashtag").toggleClass('elem-hidden',$(this).scrollTop() <= 200);
      $(".organizers").toggleClass('elem-hidden',$(this).scrollTop() > 200);
      $(".top").toggleClass('top-shadow',$(this).scrollTop() > 1);
    });

    $(".menu-trigger a").on('click', function(e) {
      e.preventDefault();
      $(".menu").toggleClass('menu-slided');
    });

    $(".load-modal").on('click', function(e) {
      e.preventDefault();

      const modalTitle = $(this).data('title');
      const container = $(this).data('container');
      const loadUrl = $(this).attr('href') + ' #' + container;

      $('#pageModal .modal-body').text(modalTitle);
      $('#pageModal .modal-body').load(loadUrl, function() {
        $('#pageModal').modal();
      });
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
