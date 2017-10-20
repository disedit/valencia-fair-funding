@include('partials.nav')

<header class="container-fluid banner">
  <div class="row">
    <div class="claim col-lg-9">
      <a href="{{ pll_home_url() }}">
        <h1>
          <span class="upper-slogan"><?php pll_e('Per un', 'fair-funding') ?></span>
          <span class="main-slogan"><?php pll_e('Finançament Just', 'fair-funding') ?></span>
        </h1>
      </a>

      @if(is_front_page())
        <div class="sign-cta d-lg-none">
          <a href="#sign-form" class="btn btn-outline-light"><i class="far fa-pencil-alt"></i> Signa el manifest</a>
        </div>
        @include('partials.modules.metro')
      @endif
  </div>
  <div class="map col-lg-3 d-none d-lg-block">
    <div class="map-holder">
      <img src="@asset('images/header-part2.png')" />
    </div>
  </div>
</header>
