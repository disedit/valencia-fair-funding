<a href="{{ get_permalink() }}" class="article-item article-{{ $i }}">
  <article @php(post_class())>
    <header>
      <div class="thumbnail">
        @php(the_post_thumbnail())
      </div>
      @include('partials/entry-meta')
      <h2 class="entry-title">{{ get_the_title() }}</h2>
    </header>
  </article>
</a>
