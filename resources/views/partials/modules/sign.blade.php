<div class="module module-sign">
  <div class="module-icon">
    <i class="far fa-pencil-alt" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2><i class="far fa-pencil-alt" aria-hidden="true"></i> {{ __('Signa', 'fair-funding') }}</h2>
    </div>

    <p class="module-text">{{ __('Lorem ipsum', 'fair-funding') }}</p>

    <form>
      <div class="form-group main-input">
        <label for="name">{{ __('Nom i cognoms', 'fair-funding') }}</label>
        <input type="text" class="form-control form-control-lg" id="name">
      </div>
      <div class="form-group main-input">
        <label for="email">{{ __('E-mail', 'fair-funding') }}</label>
        <input type="email" class="form-control form-control-lg" id="email">
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
