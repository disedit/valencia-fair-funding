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
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
