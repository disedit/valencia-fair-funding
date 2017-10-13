@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-4 demonstration">
      @include('partials.demonstration')
    </div>

    <div class="col-lg-6 col-md-8 manifesto">
      @include('partials.manifesto')
    </div>

    <div class="col-lg-3 sign-share">
      @include('partials.sign')
      @include('partials.share')
    </div>
  </div>

  @include('partials.articles')
@endsection
