@php(the_post())
@php
  the_post();
  $permalink = App::getPermalinkInLanguage('manifest');
@endphp
<div class="module module-manifesto">
  <div class="module-content">
    <div class="col-sm-6">
      <a href="{{ $permalink }}" class="manifesto-title"><h2><i class="far fa-file-alt"></i> {{ __('Manifest', 'fair-funding') }}</h2></a>
    </div>

    <div class="manifesto-content">
      @php(the_content(''))
    </div>

    <hr aria-hidden="true" />

    <a href="{{ $permalink }}" data-title="@php(the_title())" data-container="page-content" class="btn btn-light btn-lg btn-block">
      <span class="text">{{ __('Continua llegint...', 'fair-funding') }}</span>
      <span class="icon"><i class="far fa-chevron-right"></i></span>
    </a>
  </div>
</div>
