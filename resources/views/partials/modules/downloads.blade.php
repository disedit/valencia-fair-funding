@php
  global $post;
  $downloads = get_page_by_path('descarregues');
  $page = pll_get_post($downloads->ID);
  $post = get_post($page);
  setup_postdata($post);
@endphp
<div class="module module-downloads d-none d-md-block">
  <div class="module-icon">
    <i class="far fa-cloud-download-alt" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2><i class="far fa-cloud-download-alt" aria-hidden="true"></i> {{ get_the_title() }}</h2>
    </div>

    <hr />

    <div class="mt-4">
      @php(the_content())
    </div>
  </div>
</div>
@php(wp_reset_postdata())
