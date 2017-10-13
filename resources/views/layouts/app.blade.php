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
    @include('partials.header')
    <div class="container-fluid" role="document">
      @yield('content')
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
    <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
  </body>
</html>
