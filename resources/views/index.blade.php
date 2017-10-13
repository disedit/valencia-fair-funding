@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-3 demonstration">
      @include('partials.demonstration')
    </div>

    <div class="col-md-6 manifesto">
      @include('partials.manifesto')
    </div>

    <div class="col-md-3 sign-share">
      @include('partials.sign')
      @include('partials.share')
    </div>
  </div>

  <div class="row">
    <div class="col-md-3">
      News
    </div>
    <div class="col-md-9">
      {{--@include('partials.articles')--}}
    </div>
  </div>
@endsection
