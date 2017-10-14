@include('partials.nav')

<header class="container-fluid banner">
  <div class="row">
    <div class="claim col-lg-9">
      <h1>
        <span class="upper-slogan">{{ __('Per un', 'fair-funding') }}</span>
        <span class="main-slogan">{{ __('Finançament Just', 'fair-funding') }}</span>
      </h1>

      @include('partials.modules.metro')
  </div>
  <div class="map col-lg-3 d-none d-lg-block">
    <img src="@asset('images/map.png')" alt="Mapa" aria-hidden="true" />
  </div>
</header>
