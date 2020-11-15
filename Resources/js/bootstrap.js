import 'alpinejs';
import Ladmin from './ladmin';
window._ = require('lodash');

try {
  
  
  window.$ = window.jQuery = require('jquery');
  require('./datatables');

} catch (error) {}


/**
 * initialization
 */
$(function() {
  $( document ).ajaxComplete(() => {
    let ladmin = new Ladmin;
    ladmin.main();
  });
});


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';