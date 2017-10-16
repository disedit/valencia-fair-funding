{{--
  Template Name: Signatures
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row manifesto">
      <div class="col-lg-3 col-sm-4 signatures-sidebar">
        @include('partials.modules.sign')
      </div>
      <div class="col-lg-6 col-sm-8 post-content">
        <div class="module module-content" id="page-content">
          {{ $test }}
        </div>

      </div>
      <div class="col-lg-3 sidebar">
        <div class="module module-signatures">
          <a href="@php(the_permalink())" class="manifesto-signatures">
            {!! $signatures_count_formatted !!} signatures
          </a>
        </div>
      </div>
    </div>
  @endwhile
@endsection
