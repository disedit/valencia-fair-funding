@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-3">
      @include('partials.sign')
      @include('partials.share')
    </div>

    <div class="col-md-6">
      @include('partials.manifesto')
    </div>

    <div class="col-md-3">
      @include('partials.demonstration')
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
