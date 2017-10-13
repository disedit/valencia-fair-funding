<div class="row">
  <div class="col-lg-3">
    <div class="module module-articles">
      <div class="module-icon">
        <i class="far fa-file-alt" aria-hidden="true"></i>
      </div>
      <div class="module-content">
        <div class="module-header">
          <h2><i class="far fa-file-alt" aria-hidden="true"></i> {{ __('Notes de premsa', 'fair-funding') }}</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
    Articles
  </div>
</div>
{{--
@if (!have_posts())
  <div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
  </div>
  {!! get_search_form(false) !!}
@endif

@while (have_posts()) @php(the_post())
  @include('partials.content-'.get_post_type())
@endwhile
--}}
