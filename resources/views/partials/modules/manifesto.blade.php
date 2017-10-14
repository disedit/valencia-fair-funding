<div class="module module-manifesto">
  <div class="module-content">
    @php
      global $post;
      $manifesto = get_page_by_path('manifest');
      $page = pll_get_post($manifesto->ID);
      $post = get_post($page);
      setup_postdata($post);
    @endphp

    <div class="row">
      <div class="col-sm-6">
        <h2>@php(the_title())</h2>
      </div>
      <div class="col-sm-6">
        <a href="@php(the_permalink())" class="manifesto-signatures">
          <span>1</span> <span>2</span> <span>3</span> <span>4</span> signatures
        </a>
      </div>
    </div>

    @php(the_content(''))

    <hr aria-hidden="true" />

    <a href="@php(the_permalink())" data-title="@php(the_title())" data-container="page-content" class="btn btn-light btn-lg btn-block load-modal">
      <span class="text">{{ __('Continua llegint...', 'fair-funding') }}</span>
      <span class="icon"><i class="far fa-chevron-right"></i></span>
    </a>
  </div>
</div>

@php(wp_reset_postdata())