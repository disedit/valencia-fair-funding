@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-lg-8 articles">
      @include('partials.modules.articles-sidebar')
    </div>

    <div class="col-lg-4 sign-share">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          Entities
        </div>
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
