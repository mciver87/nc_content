(function ($) {
  Drupal.behaviors.ncContent = {
    attach: function (context, settings) {
      var val2 = location.href.match(/[?&]author=(.*?)[$&]/)[1];
      jQuery('#edit-author').val(val2);
      var val = location.href.match(/[?&]type=(.*?)[$&]/)[1];   // get params from URL
      jQuery('#edit-type').val(val);   //  assign URL param to select field
    },
  };
})(jQuery);