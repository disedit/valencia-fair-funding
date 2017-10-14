{{--
  Template Name: Manifest
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col-lg-2 col-sm-4 manifesto-sidebar">
        <div class="module module-page-title">
          <h2>@php(the_title())</h2>
        </div>

        <div class="d-none d-sm-block">
          @include('partials.modules.share')
        </div>
      </div>
      <div class="col-lg-7 col-sm-8 post-content">
        <div class="module module-content" id="page-content">
          @include('partials.content-page')
        </div>
        @include('partials.modules.sign')
      </div>
      <div class="col-lg-3 sidebar">
        <div class="module">
          @include('partials.sidebar')
        </div>
      </div>
    </div>
  @endwhile
@endsection
