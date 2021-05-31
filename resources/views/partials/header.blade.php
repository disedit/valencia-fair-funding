@include('partials.nav')

<header class="container-fluid banner">
  <div class="row">
    <div class="claim col-lg-12">
      <a href="{{ pll_home_url() }}">
        <h1 class="d-none d-md-block">
          <span class="upper-slogan"><?php pll_e('Per un', 'fair-funding') ?></span>
          <span class="main-slogan"><?php pll_e('Finançament Just', 'fair-funding') ?></span>
        </h1>
      </a>

      <div class="banner-icon" aria-hidden="true">
        <img src="@asset('images/icon.svg')" alt="" />
      </div>

      @if(is_front_page())
        <div class="sign-cta d-lg-none">
          <a href="/manifest" class="btn btn-outline-light"><i class="far fa-file-alt"></i> Manifest</a>
        </div>
        @include('partials.modules.metro')
      @endif
  </div>
</header>
