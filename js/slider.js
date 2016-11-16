/**
 * ==================================================================================================
 * SLIDER.JS
 * ==================================================================================================
 * Author: Kaitlin Kidd
 * Date: 11.16.16
 * Version: 0.0.1
 * Purpose: JQuery for the JQuery UI Slider.
 * Sources:
 ** https://api.jqueryui.com/slider/
 ** https://jqueryui.com/slider/
 ** http://stackoverflow.com/questions/6131970/jquery-ui-slider-update-value-from-code
 * --------------------------------------------------------------------------------------------------
 * Revision History
 * --------------------------------------------------------------------------------------------------
 * Date          Revision Description                                                     Modified By
 * --------------------------------------------------------------------------------------------------
 * 11.16.2016 - Finalized scripts.                                                           KAK
 * ==================================================================================================
 */
 $(document).ready(function() {
    $("#slider").slider({
        min: 0,
        max: 11,
        slide: function(event, ui) {
            update();
            search_mohs();
        }
    });

    update();
    search_mohs();
});

function update() {
   $amount1 = $("#slider").slider("values", 0);
   $("#amount").val($amount1);
}

function search_mohs() {
  $.ajax({
    type: "POST",
    url: "server.php",
    data: {mineral_mohs: $amount1},
    success: function(data) {
      $("#content").html(data);
    }
  });
}
