{{--
  Template Name: Manifest
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row manifesto">
      <div class="col-lg-6 col-sm-8 main-column">
        <div class="module">
          <div class="module-content post-content" id="page-content">
            <h2>@php(the_title())</h2>

            <div class="manifesto-content">
              @include('partials.content-page')
            </div>

            <div class="attachments">
              <h4>{{ __('Documents adjunts', 'fair-funding') }}</h4>
              <ul>
                <li><a href=""><i class="far fa-file"></i> Manifest en valencià <abbr>PDF</abbr></a></li>
                <li><a href=""><i class="far fa-file"></i> Manifiesto en castellano <abbr>PDF</abbr></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="sign">
          @include('partials.modules.sign')
        </div>
      </div>
      <div class="col-lg-3 col-sm-4 manifesto-sidebar">
        <div class="module module-page-title motion">
          <div class="d-none d-sm-block">
            <h2>Adhereix-te</h2>
            <div class="mt-4">
              <a href="#sign" class="btn btn-lg btn-primary btn-sign btn-block"><i class="far fa-pencil-alt"></i> Signa el manifest</a>
            </div>
          </div>

          <hr class="my-4" />

          <h2>Moció</h2>

          <div class="attachments">
            <p>Descarrega la moció que ... </p>
            <ul>
              <li><a href=""><i class="far fa-file"></i> Moció en valencià <abbr>PDF</abbr></a></li>
              <li><a href=""><i class="far fa-file"></i> Moción en castellano <abbr>PDF</abbr></a></li>
            </ul>
          </div>
        </div>

        <div class="d-none d-sm-block">
          @include('partials.modules.share')
        </div>
      </div>
      <div class="col-lg-3 sidebar">
        <div class="module module-signatures">
          <a href="@php(the_permalink())" class="manifesto-signatures">


            <h4>{{ __('Convocants', 'fair-funding') }}</h4>
            <ul>
              <li>CCOO País Valencià</li>
              <li>UGT</li>
              <li>PSPV-PSOE</li>
              <li>Compromís</li>
              <li>Podem</li>
            </ul>

            <h4>{!! $signatures_count_formatted !!} {{ __('Entitats adhe', 'fair-funding') }}</h4>
          </a>
        </div>
      </div>
    </div>
  @endwhile
@endsection
