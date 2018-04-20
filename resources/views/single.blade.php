@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col-lg-2 col-sm-4 d-flex align-items-stretch">
        <div class="module module-articles-title">
          <div class="module-icon d-none d-md-block">
            <i class="far fa-file-alt" aria-hidden="true"></i>
          </div>
          <div class="module-content">
            <div class="module-header">
              <a href="{{ App::getPermalinkInLanguage('premsa') }}">
                <h2><i class="far fa-file-alt" aria-hidden="true"></i> <?php pll_e('Notes de premsa', 'fair-funding') ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 col-sm-8 d-flex align-items-stretch">
        <div class="module module-articles-main">
          <div class="module-content">
            @include('partials.content-single-'.get_post_type())
          </div>
        </div>
      </div>
      <div class="col-lg-3 sidebar">
          @include('partials.modules.articles-sidebar')
      </div>
    </div>
  @endwhile
@endsection
