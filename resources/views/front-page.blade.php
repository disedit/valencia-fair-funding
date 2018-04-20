@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-4 demonstration">
      @include('partials.modules.articles-sidebar')
    </div>

    <div class="col-lg-6 col-md-8 manifesto">
      @include('partials.modules.manifesto')
    </div>

    <div class="col-lg-3 sign-share">
      <div class="row">
        <div class="col-md-6 col-lg-12">
          @include('partials.modules.sign')
        </div>
        <div class="col-md-6 col-lg-12">
          @include('partials.modules.share')
        </div>
      </div>
    </div>
  </div>
@endsection
