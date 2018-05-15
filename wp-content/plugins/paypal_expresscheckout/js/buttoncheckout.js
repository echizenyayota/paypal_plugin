jQuery(document).ready(function() {
    'use strict';
    jQuery('#btncolor').on('click', function() {
      if (jQuery('#btncolor').val() === '') {
        alert('Choose One!');
      } else {
        console.log(jQuery('form').submit());
      }
    });
});
