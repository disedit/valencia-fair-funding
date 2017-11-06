{{--
  Template Name: Signature Modal
--}}

<div id="page-content">
  <ul>
    @foreach($signatures as $signature)
      <li>{{ $signature->name }}</li>
    @endforeach
  </ul>
</div>
