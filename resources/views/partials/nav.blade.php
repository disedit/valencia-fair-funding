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
          {{ App\wp_nav_menu_no_ul() }}
          <li>
            <div class="fb-like" data-href="https://finançamentjust.com" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div>
          </li>
          <li>
            <a href="https://twitter.com/share?ref_src={{ urlencode('https://finançamentjust.com') }}" class="twitter-share-button" data-size="large" data-text="<?php pll_e('Signa per un #FinançamentJust per al poble valencià', 'fair-funding') ?>" data-url="https://finançamentjust.com" data-hashtags="FinançamentJust" data-show-count="false">Tweet</a>
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
