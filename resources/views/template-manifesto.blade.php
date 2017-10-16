{{--
  Template Name: Manifest
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row manifesto">
      <div class="col-lg-2 col-sm-4 manifesto-sidebar">
        <div class="module module-page-title">
          <h2><i class="far fa-file-alt"></i> @php(the_title())</h2>
        </div>

        <div class="d-none d-sm-block">
          @include('partials.modules.share')
        </div>
      </div>
      <div class="col-lg-7 col-sm-8 post-content">
        <div class="module module-content" id="page-content">
          @include('partials.content-page')

          <div class="attachments">
            <h4>{{ __('Documents adjunts', 'fair-funding') }}</h4>
            <ul>
              <li><a href=""><i class="far fa-file"></i> Manifest en valencià <abbr>PDF</abbr></a></li>
              <li><a href=""><i class="far fa-file"></i> Manifiesto en castellano <abbr>PDF</abbr></a></li>
            </ul>
          </div>
        </div>
        @include('partials.modules.sign')
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
