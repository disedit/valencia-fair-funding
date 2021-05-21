@php
  query_posts('posts_per_page=4');
@endphp

<div class="module-articles module-articles-vertical">
  <div class="module-content">
    <div class="module-header">
      <a href="{{ App::getPermalinkInLanguage('premsa') }}">
        <h2><i class="far fa-newspaper" aria-hidden="true"></i> <?php pll_e('Notícies', 'fair-funding') ?></h2>
      </a>
    </div>
    @php($i = 0) @while (have_posts()) @php(the_post()) @php($i++)
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>
</div>

@php(wp_reset_query())
