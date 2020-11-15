window.dt = require('datatables.net').default;

$(function() {
  $('.ladmin-datatables').each(function() {
    let options = $(this).data('options');
    $(this).DataTable({
      language: {
        search: '',
        searchPlaceholder: 'Search...'
      },
      bLengthChange: false,
      iDisplayLength: 50,
      ...options
    });
  });

  $('.ladmin-datatable-base').each(function() {
    $(this).DataTable();
  });
});