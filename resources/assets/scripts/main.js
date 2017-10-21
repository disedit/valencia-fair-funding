// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import templateManifesto from './routes/manifesto';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // Signatures
  templateManifesto,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
