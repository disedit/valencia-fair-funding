<nav class="top">
  <div class="container-fluid">
    <div class="hashtag first-hashtag">
      <h1><a href="{{ pll_home_url() }}">#18N</a></h1>
    </div>

    <div class="hashtag second-hashtag elem-hidden">
      <h1><a href="{{ pll_home_url() }}">#FinançamentJust</a></h1>
    </div>

    <div class="menu">
      <div class="menu-items">
        <ul class="d-flex d-lg-flex">
          <li class="d-lg-none">
            <a href="">Manifestació</a>
          </li>
          <li class="d-lg-none">
            <a href="">Manifest</a>
          </li>
          <li class="d-lg-none">
            <a href="">Notes de premsa</a>
          </li>
          <li class="d-lg-none">
            <a href="">Contacta</a>
          </li>
          <li>
            <div class="fb-like" data-href="{{ home_url('/') }}" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
          </li>
          <li>
            <a href="https://twitter.com/share?ref_src={{ home_url('/') }}" class="twitter-share-button" data-size="large" data-text="<?php pll_e('Tweet', 'fair-funding') ?>" data-url="{{ home_url('/') }}" data-hashtags="FinançamentJust" data-show-count="false">Tweet</a>
          </li>
          @php(pll_the_languages())
        </ul>
      </div>
      <ul class="menu-trigger d-lg-none">
        <li><a href="#"><i class="far fa-bars"></i> <span class="sr-only">Menú</span></a></li>
      </ul>
    </div>
  </div>
</nav>
