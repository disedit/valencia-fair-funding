@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col-lg-3 col-sm-4">
        <div class="module module-articles-title">
          <div class="module-icon d-none d-md-block">
            <i class="far fa-file-alt" aria-hidden="true"></i>
          </div>
          <div class="module-content">
            <div class="module-header">
              <h2><i class="far fa-file-alt" aria-hidden="true"></i> {{ __('Notes de premsa', 'fair-funding') }}</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="module module-content">
          @include('partials.content-single-'.get_post_type())
        </div>
      </div>
      <div class="col-lg-3">
        <div class="module">
          @include('partials.sidebar')
        </div>
      </div>
    </div>
  @endwhile
@endsection
