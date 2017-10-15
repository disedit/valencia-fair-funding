@php
  query_posts('posts_per_page=4');
@endphp
<div class="row">
  <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
    <div class="module module-articles-title">
      <div class="module-icon d-none d-md-block">
        <i class="far fa-file-alt" aria-hidden="true"></i>
      </div>
      <div class="module-content">
        <div class="module-header">
          <a href="{{ App::getPermalinkInLanguage('premsa') }}">
            <h2><i class="far fa-file-alt" aria-hidden="true"></i> {{ __('Notes de premsa', 'fair-funding') }}</h2>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-8 articles">
    <div class="module module-articles">
      <div class="module-content">
        <div class="row">
          @php($i = 0) @while (have_posts()) @php(the_post()) @php($i++)
            @include('partials.content-'.get_post_type())
          @endwhile
        </div>
      </div>
    </div>
  </div>
</div>
@php(wp_reset_query())
