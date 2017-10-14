@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-4 demonstration">
      @include('partials.modules.demonstration')
    </div>

    <div class="col-lg-6 col-md-8 manifesto">
      @include('partials.modules.manifesto')
    </div>

    <div class="col-lg-3 sign-share">
      @include('partials.modules.sign')
      @include('partials.modules.share')
    </div>
  </div>

  @include('partials.modules.articles')
@endsection
