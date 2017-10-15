@extends('layouts.app')

@section('content')
  @include('partials.modules.articles')

  {!! get_the_posts_navigation() !!}
@endsection
