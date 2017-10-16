<article @php(post_class())>
  <header>
    <h1 class="entry-title">{{ get_the_title() }}</h1>
    @include('partials/entry-meta')
  </header>
  <div class="entry-share">
    <div class="fb-like" data-href="http://financamentjust.com" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
    <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="dfgfdg" data-url="http://fincancamentjust.com" data-hashtags="FinançamentJust" data-show-count="false">Tweet</a>
  </div>
  <div class="entry-content">
    <div class="thumbnail">
      @php(the_post_thumbnail())
    </div>

    @php(the_content())
  </div>
  <footer>
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  {{--@php(comments_template('/partials/comments.blade.php'))--}}
</article>
