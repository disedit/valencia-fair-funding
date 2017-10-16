<div class="module module-sign">
  <div class="module-icon">
    <i class="far fa-pencil-alt" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2><i class="far fa-pencil-alt" aria-hidden="true"></i> {{ __('Signa', 'fair-funding') }}</h2>
    </div>

    <p class="module-text">{{ __('Lorem ipsum', 'fair-funding') }}</p>

    <hr />

    <div class="mb-2">
      <label class="custom-control custom-radio">
        <input id="type1" name="type" type="radio" class="custom-control-input" checked="checked">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Individual</span>
      </label>
      <label class="custom-control custom-radio">
        <input id="type2" name="type" type="radio" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Entitat</span>
      </label>
    </div>

    <form action="{{ esc_url(admin_url('admin-post.php')) }}" method="post">
      <input type="hidden" name="action" value="sign">
      <div class="form-group main-input">
        <label for="name">{{ __('Nom i cognoms', 'fair-funding') }}</label>
        <input type="text" class="form-control form-control-lg" id="name">
      </div>
      <div class="form-group main-input">
        <label for="email">{{ __('E-mail', 'fair-funding') }}</label>
        <input type="email" class="form-control form-control-lg" id="email">
      </div>
      <label class="custom-control custom-checkbox mt-2">
        <input type="checkbox" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">Afegeix el meu nom al llistat públic</span>
      </label>
      <button type="submit" class="btn btn-primary btn-block btn-lg">Signa</button>
    </form>
  </div>
</div>
