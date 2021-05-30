@php
  query_posts('posts_per_page=4');
@endphp

<div class="module-articles module-articles-vertical">
  <div class="module-content">
    @php($i = 0) @while (have_posts()) @php(the_post()) @php($i++)
      @include('partials.content-'.get_post_type())
    @endwhile
  </div>
</div>

@php(wp_reset_query())
