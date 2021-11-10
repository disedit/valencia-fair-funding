{{--
  Template Name: Manifest
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    <div class="row manifesto">
      <div class="col-lg-6 main-column">
        <div class="module manifesto">
          <div class="module-content post-content" id="page-content">
            <h2>@php(the_title())</h2>

            <div class="manifesto-content">
              @include('partials.content-page')
            </div>

            <div class="attachments">
              <h4><?php pll_e('Documents adjunts', 'fair-funding') ?></h4>
              <ul>
                <li><a href="/wp-content/uploads/2017/10/Manifest.pdf"><i class="far fa-file"></i> Manifest en valencià <abbr>PDF</abbr></a></li>
                <li><a href="/wp-content/uploads/2017/10/20170915-acuerdo-y-adhesion-financiacion-inversion-justa-cv.pdf"><i class="far fa-file"></i> Manifiesto en castellano <abbr>PDF</abbr></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div id="sign">
          @include('partials.modules.sign')
        </div>
      </div>
      <div class="col-lg-3 manifesto-sidebar">
        <div class="module module-page-title motion">
          <div class="module-content">
            <div class="d-none d-lg-block">
              <h2><?php pll_e('Adhereix-te', 'fair-funding') ?></h2>
              <p><?php pll_e('Signa en favor d\'un <strong>#FinançamentJust</strong> per al poble valencià.', 'fair-funding') ?></p>
              <a href="#sign" class="btn btn-lg btn-primary btn-sign btn-block"><i class="far fa-pencil-alt"></i> <?php pll_e('Signa el manifest', 'fair-funding'); ?></a>
            </div>

            <hr class="my-4" />

            <h2><?php pll_e('Moció', 'fair-funding') ?></h2>

            <div class="attachments">
              <p><?php pll_e('Descarrega la moció que s\'està presentant als ajuntaments.', 'fair-funding') ?></p>
              <ul>
                <li><a href="/wp-content/uploads/2017/10/Moció-FinançamentJust.doc"><i class="far fa-file-alt"></i> Moció ajuntaments <abbr>VAL</abbr></a></li>
                <li><a href="/wp-content/uploads/2017/10/Moción-FinançamentJust_castellà.doc"><i class="far fa-file-alt"></i> Moción ayuntamientos <abbr>CAS</abbr></a></li>
              </ul>
              <p class="mt-4"><?php pll_e("Descarrega la moció per a presentar als comités d'empresa.", 'fair-funding') ?></p>
              <ul>
                <li><a href="/wp-content/uploads/2021/11/Comités-empresa_FinançamentJust_valencià.doc"><i class="far fa-file-alt"></i> Moció comités <abbr>VAL</abbr></a></li>
                <li><a href="/wp-content/uploads/2021/11/Comités-empresa_FinançamentJust_castellano.doc"><i class="far fa-file-alt"></i> Moción comités <abbr>CAS</abbr></a></li>
              </ul>

            </div>
          </div>
        </div>

        <div class="d-none d-sm-block">
          @include('partials.modules.share')
        </div>
      </div>
      <div class="col-lg-3 sidebar">
        <div class="module module-signatures">
            <h4><?php pll_e('Convocants', 'fair-funding') ?></h4>
            <ul>
              <li>UGT País Valencià</li>
              <li>CCOO País Valencià</li>
              <li>CEV</li>
              <li>PSPV-PSOE</li>
              <li>Compromís</li>
              <li>Partido Popular</li>
              <li>Unides Podem EUPV</li>
              <li>Ciudadanos</li>
            </ul>

            <h4>{!! $signatures_count_organizations !!} <?php pll_e('Entitats adherides', 'fair-funding') ?></h4>
            <ul id="signaturesOrganizations" class="signature-list" data-type="organization">
              @foreach($signatures_organizations as $organization)
                <li>{!! stripslashes($organization->name) !!}</li>
              @endforeach
            </ul>
            @if($signatures_count_organizations > 20)
              <ul>
                <li class="more"><a href="/signature-modal/?type=organization&per_page=1000&page=1" data-title="Entitats adherides" data-container="page-content" class="load-modal"><i class="far fa-plus-circle"></i> <?php pll_e('Més...', 'fair-funding'); ?></a></li>
              </ul>
            @endif
        </div>
      </div>
    </div>
  @endwhile
@endsection
