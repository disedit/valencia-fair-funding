<article @php(post_class())>
  <header>
    @include('partials/entry-meta')
    <h2 class="entry-title">{{ get_the_title() }}</h2>
    <div class="icon"><i class="far fa-plus"></i></div>
  </header>
</article>
