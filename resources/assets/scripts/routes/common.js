export default {
  init() {

    /**
     * Big input's focus/blur functionality
     */
    $(".main-input input").on('focus', function() {
      $(this).parent().addClass('main-input-active');
    });

    $(".main-input input").on('blur', function() {
      if(!$(this).val()) {
        $(this).parent().removeClass('main-input-active');
      }
    });

    /**
     * Header change on scroll
     */
    $(window).bind('scroll', function(){
      $(".hashtag").toggleClass('elem-hidden',$(this).scrollTop() <= 200);
      $(".organizers").toggleClass('elem-hidden',$(this).scrollTop() > 200);
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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
