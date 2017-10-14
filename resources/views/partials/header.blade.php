@include('partials.nav')

<header class="container-fluid banner">
  <div class="row">
    <div class="claim col-lg-9">
      <a href="{{ pll_home_url() }}">
        <h1>
          <span class="upper-slogan">{{ __('Per un', 'fair-funding') }}</span>
          <span class="main-slogan">{{ __('Finançament Just', 'fair-funding') }}</span>
        </h1>
      </a>

      @if(is_front_page())
        @include('partials.modules.metro')
      @endif
  </div>
  <div class="map col-lg-3 d-none d-lg-block">
    <img src="@asset('images/map.png')" alt="Mapa" aria-hidden="true" />
  </div>
</header>
