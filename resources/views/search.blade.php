@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="alert alert-warning">
      <?php pll_e('Sorry, no results were found.', 'fair-funding') ?>
    </div>
    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
