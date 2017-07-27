// import external dependencies
import 'jquery';
import 'bootstrap-sass/assets/javascripts/bootstrap';
import 'fastclick';
import 'jquery-match-height';

// import local dependencies
import Router from './util/router';
import common from './routes/Common';
import home from './routes/Home';

// Use this variable to set up the common and page specific functions. If you
// rename this variable, you will also need to rename the namespace below.
const routes = {
  // All pages
  common,
  home,
};

// Load Events
document.addEventListener('DOMContentLoaded', () =>
  new Router(routes).loadEvents()
);
