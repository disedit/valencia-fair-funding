<div class="module module-sign">
  <div class="module-content">
    <div class="module-header">
      <i class="far fa-pencil-alt" aria-hidden="true"></i>
      <h2>{{ __('Signa', 'fair-funding') }}</h2>
    </div>

    <p>{{ __('Lorem ipsum', 'fair-funding') }}</p>

    <form>
      <div class="form-group">
        <label for="name">{{ __('Nom i cognoms', 'fair-funding') }}</label>
        <input type="text" class="form-control" id="name" placeholder="{{ __('Nom i cognoms', 'fair-funding') }}">
      </div>
      <div class="form-group">
        <label for="email">{{ __('E-mail', 'fair-funding') }}</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email">
      </div>
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Afegeix el meu nom al llistat públic</span>
      </label>
      <button type="button" class="btn btn-primary btn-block btn-lg">Signa</button>
    </form>
  </div>
</div>
