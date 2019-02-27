(function ($, Drupal, drupalSettings) {

  Drupal.behaviors.dt_method_library = {
    attach: function (context, settings) {
      window.onload = function () {
        //Get object by id
        var a = document.getElementById('visualization');
        var svgDoc = a.contentDocument;

        svgItem_Phase_1 = svgDoc.getElementById("erstePhaseDivergent");

        svgItem_Phase_1.once().onclick = function () {
          alert('Erste Phase!');
        }
      }




    }
  }
}(jQuery, Drupal, drupalSettings));