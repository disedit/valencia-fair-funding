<div class="module module-sign" id="sign-form">
  <div class="module-icon">
    <i class="far fa-pencil-alt" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2><i class="far fa-pencil-alt" aria-hidden="true"></i> {{ __('Signa', 'fair-funding') }}</h2>
    </div>

    <p class="module-text">{{ __('Lorem ipsum', 'fair-funding') }}</p>

    <hr />

    <form id="signAction" action="{{ esc_url(admin_url('admin-post.php')) }}" method="post">
      <input type="hidden" name="action" value="sign">

      <div class="mb-2">
        <label class="custom-control custom-radio">
          <input id="type1" name="type" value="individual" type="radio" class="custom-control-input" checked="checked">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">{{ __('Individual', 'fair-funding') }}</span>
        </label>
        <label class="custom-control custom-radio">
          <input id="type2" name="type" value="organization" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">{{ __('Entitat', 'fair-funding') }}</span>
        </label>
      </div>

      <div class="form-group main-input">
        <label for="name"><span class="visible-individual">{{ __('Nom i cognoms', 'fair-funding') }}</span> <span class="sr-only">o</span> <span class="visible-organization" style="display: none">{{ __('Nom de la entitat', 'fair-funding') }}</span></label>
        <input type="text" class="form-control form-control-lg" id="name" name="name" aria-describedby="nameHelp">
        <small id="nameHelp" class="sr-only"></small>
      </div>
      <div class="form-group main-input">
        <label for="email">{{ __('E-mail', 'fair-funding') }}</label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="sr-only"></small>
      </div>
      <label class="custom-control custom-checkbox mt-2">
        <input type="checkbox" name="is_public" id="isPublic" value="1" class="custom-control-input">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description">
          <span class="visible-individual">{{ __('Afegeix el meu nom al llistat públic', 'fair-funding') }}</span>
          <span class="visible-organization" style="display: none" aria-hidden="true">{{ __('Afegeix la entitat al llistat públic', 'fair-funding') }}</span>
        </span>
      </label>
      <button type="submit" class="btn btn-primary btn-block btn-lg">{{ __('Signa', 'fair-funding') }}</button>
    </form>

    <div id="signSuccess" style="display: none;">
      <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-body">
          <h4 class="card-title"><i class="far fa-thumbs-up"></i> {{ __('Gràcies', 'fair-funding') }}</h4>
          <p class="card-text">{{ __('Lorem ipsum gracies signar', 'fair-funding') }}</p>
          <p class="card-text"><a href="" class="btn btn-outline-light">{{ __('Llistat de signatures', 'fair-funding') }} <i class="far fa-chevron-right"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
