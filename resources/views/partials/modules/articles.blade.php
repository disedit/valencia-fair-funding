<div class="row">
  <div class="col-lg-3 col-md-4 d-flex align-items-stretch">
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
  <div class="col-lg-9 col-md-8 articles">
    <div class="module module-articles">
      <div class="module-content d-flex">
        @while (have_posts()) @php(the_post())
          @include('partials.content-'.get_post_type())
        @endwhile
      </div>
    </div>
  </div>
</div>
