{{--
  Template Name: Signatures
--}}

@extends('layouts.app')

@section('content')
  @php
    $signatures_organizations = TemplateManifesto::signatures('organization', 0, 20);
  @endphp
  <h4>{!! $signatures_count_organizations !!} <?php pll_e('entitats adherides', 'fair-funding') ?></h4>
  <ul>
    @foreach($signatures_organizations as $organization)
      <li>{{ $organization->name }}</li>
    @endforeach
  </ul>
@endsection
