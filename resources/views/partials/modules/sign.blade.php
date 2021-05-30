@php
  $manifest = App::getPermalinkInLanguage('manifest');
@endphp
<div class="module module-sign" id="sign-form">
  <div class="module-icon">
    <i class="far fa-pencil-alt" aria-hidden="true"></i>
  </div>
  <div class="module-content">
    <div class="module-header">
      <h2>
        <i class="far fa-pencil-alt" aria-hidden="true"></i> <?php pll_e('Signa', 'fair-funding') ?>
        @isset($signatures_count)
          <a href="{{ $manifest }}" class="manifesto-signatures">
            {{ number_format($signatures_count, 0, ",", ".") }} <span class="sr-only"><?php pll_e('signatures', 'fair-funding') ?></span>
          </a>
        @endif
      </h2>
    </div>

    <p class="module-text"><?php pll_e("Signa en favor d'un <strong>#FinançamentJust</strong> per al poble valencià.", 'fair-funding') ?></p>

    <form id="signAction" action="{{ esc_url(admin_url('admin-post.php')) }}" method="post">
      <input type="hidden" name="action" value="sign">

      <!--<div class="mb-2 type-of-signature">
        <div class="custom-control custom-radio">
          <input id="type1" name="type" value="individual" type="radio" class="custom-control-input" checked="checked">
          <label class="custom-control-label" for="type1"><?php pll_e('Persona', 'fair-funding') ?></label>
        </div>
        <div class="custom-control custom-radio">
          <input id="type2" name="type" value="organization" type="radio" class="custom-control-input">
          <label class="custom-control-label" for="type2"><?php pll_e('Entitat', 'fair-funding') ?></label>
        </div>
        <div class="custom-control custom-radio">
          <input id="type3" name="type" value="committee" type="radio" class="custom-control-input">
          <label class="custom-control-label" for="type3"><?php pll_e("Comité d'empresa", 'fair-funding') ?></label>
        </div>
      </div>-->

      <div class="form-group main-input">
        <label for="name">
          <span class="visible-individual"><?php pll_e('Nom i cognoms', 'fair-funding') ?></span>
          <span class="visible-organization" style="display: none"><?php pll_e('Nom de la entitat', 'fair-funding') ?></span>
          <span class="visible-committee" style="display: none"><?php pll_e('Nom del comité', 'fair-funding') ?></span>
        </label>
        <input type="text" class="form-control form-control-lg" id="name" name="name" aria-describedby="nameHelp" required>
        <small id="nameHelp" class="invalid-feedback"></small>
      </div>
      <div class="form-group main-input">
        <label for="nif">
          <span class="visible-individual"><?php pll_e('DNI/NIE', 'fair-funding') ?></span>
          <span class="sr-only">o</span>
          <span class="visible-organization" style="display: none"><?php pll_e('CIF', 'fair-funding') ?></span>
          <span class="sr-only">o</span>
          <span class="visible-committee" style="display: none"><?php pll_e('Nom del representant', 'fair-funding') ?></span>
        </label>
        <input type="text" class="form-control form-control-lg" id="nif" name="nif" aria-describedby="emailHelp" required>
        <small id="nifHelp" class="invalid-feedback"></small>
      </div>
      <div class="form-group main-input">
        <label for="email"><?php pll_e('E-mail', 'fair-funding') ?></label>
        <input type="email" class="form-control form-control-lg" id="email" name="email" aria-describedby="emailHelp" required>
        <small id="emailHelp" class="invalid-feedback"></small>
      </div>
      <div class="custom-control custom-checkbox mt-2">
        <input type="checkbox" name="is_public" id="isPublic" value="1" class="custom-control-input">
        <label class="custom-control-label" for="isPublic">
          <span class="visible-individual"><?php pll_e('Afegeix el meu nom al llistat públic', 'fair-funding') ?></span>
          <span class="visible-organization" style="display: none" aria-hidden="true"><?php pll_e('Afegeix la entitat al llistat públic', 'fair-funding') ?></span>
          <span class="visible-committee" style="display: none" aria-hidden="true"><?php pll_e('Afegeix el comité al llistat públic', 'fair-funding') ?></span>
        </label>
      </div>
      <button type="submit" class="btn btn-primary btn-block btn-lg"><?php pll_e('Signa', 'fair-funding') ?></button>
    </form>

    <div id="signSuccess" style="display: none;">
      <div class="card text-white bg-info">
        <div class="card-body">
          <div class="icon"><i class="far fa-thumbs-up"></i></div>
          <h4 class="card-title"><?php pll_e('Gràcies pel teu suport!', 'fair-funding') ?></h4>
          <hr />
          <p><?php pll_e('Convida a les teues amistats', 'fair-funding') ?></p>
          <div class="mb-2"><div class="fb-like" data-href="https://finançamentjust.com" data-layout="button_count" data-action="like" data-size="large" data-show-faces="false" data-share="false"></div></div>
          <div><a href="https://twitter.com/share?ref_src={{ urlencode('https://finançamentjust.com') }}" class="twitter-share-button" data-size="large" data-text="<?php pll_e('Signa per un #FinançamentJust per al poble valencià', 'fair-funding') ?>" data-url="https://finançamentjust.com" data-hashtags="FinançamentJust" data-show-count="true">Tweet</a></div>
          <hr />
          <p class="card-text"><a href="{{ $manifest }}" class="btn btn-outline-light"><?php pll_e('Llistat de signatures', 'fair-funding') ?> <i class="far fa-chevron-right"></i></a></p>
        </div>
      </div>
    </div>
  </div>
</div>
