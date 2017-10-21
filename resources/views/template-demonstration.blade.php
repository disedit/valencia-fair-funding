{{--
  Template Name: Manifestacio
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row">
      <div class="col-lg-2 col-sm-4 page-title">
        <div class="module module-section-title">
          <h2>@php(the_title())</h2>
        </div>
      </div>
      <div class="col-lg-7 col-sm-8 post-content bg-white">
        <div class="module module-content" id="page-content">
          @include('partials.content-page')
        </div>
      </div>
    </div>
  @endwhile
@endsection
