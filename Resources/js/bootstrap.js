window.$ = window.jQuery = require('jquery');
import 'alpinejs'
import Ladmin from './ladmin';
require('./datatables');


/**
 * initialization
 */
$( document ).ajaxComplete(() => {
  let ladmin = new Ladmin;
  ladmin.main();
});
