@php
  $permalink = App::getPermalinkInLanguage('manifestacio');
@endphp

<div class="module module-demonstration">
  <div class="module-content">
    <ul>
      <li>
        <a href="{{ $permalink }}" data-title="<?php pll_e('Manifestació 18N', 'fair-funding') ?>" data-container="page-content" data-target="venue" class="load-modal">
          <h2><?php pll_e('Manifestació', 'fair-funding') ?></h2>
          <h3>València</h3>
          <div class="date">18N</div>
        </a>
      </li>
      <li>
        <a href="{{ $permalink }}" data-title="<?php pll_e('Manifestació 18N', 'fair-funding') ?>" data-container="page-content" data-target="venue" class="load-modal">
          <i class="far fa-map-marker-alt"></i>
          <span class="sr-only"><?php pll_e('Lloc', 'fair-funding') ?></span>
          <span class="secondary">Explanada MuVIM</span>
          <span>Guillem de Castro</span>
        </a>
      </li>
      <li data-toggle="tooltip" data-placement="left" title="<?php pll_e('Afegeix al meu calendari', 'fair-funding') ?>">
        <a href="{{ $permalink }}" data-title="<?php pll_e('Manifestació 18N', 'fair-funding') ?>" data-container="page-content" data-target="event" class="load-modal">
          <i class="far fa-clock"></i>
          <span class="sr-only"><?php pll_e('Hora', 'fair-funding') ?></span>
          <span>18:00</span>
        </a>
      </li>
      <li>
        <a href="{{ $permalink }}" data-title="<?php pll_e('Manifestació 18N', 'fair-funding') ?>" data-container="page-content" data-target="transport" class="load-modal">
          <i class="far fa-bus"></i>
          <span><?php pll_e('Transport', 'fair-funding') ?></span>
        </a>
      </li>
      <li>
        <a href="{{ $permalink }}" data-title="<?php pll_e('Manifestació 18N', 'fair-funding') ?>" data-container="page-content" data-target="more" class="load-modal">
          <i class="far fa-info-circle"></i>
          <span><?php pll_e('Més informació', 'fair-funding') ?></span>
        </a>
      </li>
    </ul>
  </div>
</div>
<div id="demonstrationMap" class="demonstration-map d-none d-md-block" aria-hidden="true"></div>
