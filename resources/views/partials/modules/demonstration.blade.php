@php
  $permalink = App::getPermalinkInLanguage('manifest');
@endphp

<div class="module module-demonstration">
  <div class="module-content">
    <h2>{{ __('Manifestació', 'fair-funding') }}</h2>

    <div class="date">
      18N
    </div>

    <ul>
      <li>
        <a href="{{ $permalink }}" data-title="{{ __('Manifestació 18N', 'fair-funding') }}" data-container="page-content" data-target="venue" class="load-modal">
          <i class="far fa-map-marker-alt"></i>
          <span class="sr-only">{{ __('Lloc', 'fair-funding') }}</span>
          <span>Explanada MuVIM</span>
          <span>Guillem de Castro</span>
        </a>
      </li>
      <li data-toggle="tooltip" data-placement="left" title="{{ __('Afegeix al meu calendari', 'fair-funding') }}">
        <a href="{{ $permalink }}" data-title="{{ __('Manifestació 18N', 'fair-funding') }}" data-container="page-content" data-target="event" class="load-modal">
          <i class="far fa-clock"></i>
          <span class="sr-only">{{ __('Hora', 'fair-funding') }}</span>
          <span>18:00</span>
        </a>
      </li>
      <li>
        <a href="{{ $permalink }}" data-title="{{ __('Manifestació 18N', 'fair-funding') }}" data-container="page-content" data-target="transport" class="load-modal">
          <i class="far fa-bus"></i>
          <span>{{ __('Transport', 'fair-funding') }}</span>
        </a>
      </li>
      <li>
        <a href="{{ $permalink }}" data-title="{{ __('Manifestació 18N', 'fair-funding') }}" data-container="page-content" data-target="more" class="load-modal">
          <i class="far fa-info-circle"></i>
          <span>{{ __('Més informació', 'fair-funding') }}</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<div id="demonstrationMap" class="demonstration-map d-none d-md-block" aria-hidden="true"></div>
