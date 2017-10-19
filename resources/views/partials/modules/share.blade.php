<div class="module module-share">
  <div class="module-icon">
    <i class="far fa-bullhorn" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2><i class="far fa-bullhorn" aria-hidden="true"></i> <?php pll_e('Fes difussió', 'fair-funding') ?></h2>
    </div>

    <p class="module-text"><?php pll_e('Si a tu també t\'indigna, comparteix-ho amb les teues amistats i fes correr la veu.', 'fair-funding') ?></p>

    <ul class="share-buttons">
      <li><a href="https://www.facebook.com/sharer/sharer.php?u={{ rawurlencode(home_url('/')) }}" class="btn btn-dark btn-facebook btn-lg btn-block" target="_blank" rel="noopener"><i class="fab fa-facebook-square"></i> Facebook</a></li>
      <li><a href="https://twitter.com/intent/tweet?text=<?php rawurlencode(pll__('Tweet', 'fair-funding')) ?>&url={{ rawurlencode(home_url()) }}&via=finan_just&related=finan_just" class="btn btn-dark btn-twitter btn-lg btn-block"><i class="fab fa-twitter"></i> Twitter</a></li>
    </ul>

    <hr />

    <div class="d-none d-lg-block">
      <a class="twitter-timeline" data-chrome="noheader nofooter noborders transparent noscrollbar" data-height="500"  href="https://twitter.com/hashtag/FinancamentJust" data-widget-id="920645371428245504">#FinancamentJust Tweets</a>
    </div>
  </div>
</div>
