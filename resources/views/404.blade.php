@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (!have_posts())
    <div class="alert alert-warning">
      <?php pll_e('Sorry, but the page you were trying to view does not exist.', 'fair-funding') ?>
    </div>
    {!! get_search_form(false) !!}
  @endif
@endsection
