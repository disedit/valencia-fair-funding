@extends('layouts.app')

@section('content')
  <div class="row page-wrapper">
    <div class="col-xl-8 articles">
      @php(dynamic_sidebar('sidebar-banner'))
      @include('partials.modules.articles-sidebar')
      <a href="{{ App::getPermalinkInLanguage('premsa') }}" class="more-news">
        <?php pll_e('Més notícies', 'fair-funding') ?> <i class="far fa-chevron-right"></i>
      </a>
    </div>

    <div class="col-xl-4 sign-share">
      {{-- @include('partials.modules.entities') --}}
      @include('partials.modules.manifest')
      @include('partials.modules.sign')
      @include('partials.modules.share')
    </div>
  </div>
@endsection
