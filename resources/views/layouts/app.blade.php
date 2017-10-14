<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ca_ES/sdk.js#xfbml=1&version=v2.10&appId=141021179380419";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    @php(do_action('get_header'))
    <div class="page-wrapper">
      @include('partials.header')
      <div class="container-fluid" role="document">
        @yield('content')
      </div>
      @php(do_action('get_footer'))
      @include('partials.footer')
    </div>

    <div class="modal fade" id="pageModal" tabindex="-1" role="dialog" aria-labelledby="pageModalTitle" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="pageModalTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"></div>
        </div>
      </div>
    </div>

    @php(wp_footer())
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </body>
</html>
