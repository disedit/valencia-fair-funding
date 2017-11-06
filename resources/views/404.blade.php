@extends('layouts.app')

@section('content')

  @if (!have_posts())
    <div class="alert alert-warning">
      <?php pll_e('Sorry, but the page you were trying to view does not exist.', 'fair-funding') ?>
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
