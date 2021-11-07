<nav class="top">
  <div class="container">
    <div class="hashtag first-hashtag">
      <h1><a href="{{ pll_home_url() }}">#FinançamentJust</a></h1>
    </div>

    <div class="menu">
      <div class="menu-items">
        <ul class="d-flex d-lg-flex">
          {{ App\wp_nav_menu_no_ul() }}
          <li>
            <a href="https://instagram.com" target="_blank" rel="noopener" title="Instagram">
              <i class="fab fa-instagram fa-lg"></i> @finanjust
            </a>
          </li>
          <!--<li>
            <a href="https://twitter.com/finan_just" target="_blank" rel="noopener" title="Twitter">
              <i class="fab fa-twitter fa-lg"></i> @finan_just
            </a>
          </li>-->
          @php(pll_the_languages())
        </ul>
      </div>
      <ul class="menu-trigger d-lg-none">
        <li><a href="#"><i class="far fa-bars"></i> <span class="sr-only">Menú</span></a></li>
      </ul>
    </div>
  </div>
</nav>
