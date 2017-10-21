export default {
  init() {
    this.fetchSignature('organization', 2, 20, 4000);
    this.fetchSignature('individual', 2, 60, 3000);
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
  fetchSignature(type, current_page, per_page, interval) {
    const self = this;

    $.ajax({
      url: '/signatures/',
      data: { per_page, current_page, type },
      dataType: 'json',
    }).done(function(response) {
      this.i = 0;
      this.timer = setInterval(() => {
        if(this.i <= response.length - 1){
          $(".signature-list[data-type=" + type + "]").prepend('<li class="reveal">' + response[this.i].name + '</li>');
          $(".signature-list[data-type=" + type + "] li:last-child").remove();
          this.i++;
        }

        if(this.i == per_page){
          this.i = 0;
          clearInterval(this.timer);
          self.fetchSignature(type, current_page + 1, per_page, interval);
        }
      }, interval);
    });
  },
};
