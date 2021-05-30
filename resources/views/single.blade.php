@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row page-wrapper">
      <div class="col-lg-8 d-flex align-items-stretch">
        <div class="module module-articles-main">
          <div class="module-content">
            <a href="{{ App::getPermalinkInLanguage('premsa') }}">
              <h2><i class="far fa-newspaper" aria-hidden="true"></i> <?php pll_e('Notícies', 'fair-funding') ?></h2>
            </a>
            @include('partials.content-single-'.get_post_type())
          </div>
        </div>
      </div>
      <div class="col-lg-4 sign-share">
        <div class="row">
          <div class="col-md-12 col-lg-12">
            @include('partials.modules.entities')
          </div>
          <div class="col-md-6 col-lg-12">
            @include('partials.modules.sign')
          </div>
          <div class="col-md-6 col-lg-12">
            @include('partials.modules.share')
          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
