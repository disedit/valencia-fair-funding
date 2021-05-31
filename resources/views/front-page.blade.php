@extends('layouts.app')

@section('content')
  <div class="row page-wrapper">
    <div class="col-xl-8 articles">
      @include('partials.modules.articles-sidebar')
    </div>

    <div class="col-xl-4 sign-share">
      @include('partials.modules.entities')
      @include('partials.modules.sign')
      @include('partials.modules.share')
    </div>
  </div>
@endsection
