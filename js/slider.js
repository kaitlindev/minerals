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
