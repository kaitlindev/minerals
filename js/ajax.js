/**
 * ==================================================================================================
 * AJAX.JS
 * ==================================================================================================
 * Author: Kaitlin Kidd
 * Date: 11.16.16
 * Version: 0.0.1
 * Purpose: Ajax calls for app.
 * --------------------------------------------------------------------------------------------------
 * Revision History
 * --------------------------------------------------------------------------------------------------
 * Date          Revision Description                                                     Modified By
 * --------------------------------------------------------------------------------------------------
 * 11.16.2016 - Finalized AJAX calls.                                                         KAK
 * ==================================================================================================
 *
 /***************************************************
 ******************** SHOW ALL ******************
 ****************************************************/
$(document).ready(function() {
  $("#selectAllBtn").click(function() {
    function show_all() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {action: "showAll"},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    show_all();
  });
});

/***************************************************
******************** ID SEARCH ******************
****************************************************/
$(document).ready(function() {
  $("#button2").click(function() {
    function search_id() {
      var id=$("#id").val();
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_id: id},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_id();
  });
});

/*******************************************************
******************** NAME SEARCH ******************
****************************************************/
$(document).ready(function() {
  $("#nameSearchBtn").click(function() {
    function search_name() {
      var name=$("#nameSearchInput").val();
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_name: name},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_name();
  });
});

/**********************************************************
******************** LETTER SEARCH ******************
**********************************************************/
$(document).ready(function() {
  $(".letter").click(function() {
    var letter= $(this).attr("value");
    function search_letter() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_letter: letter},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_letter();
  });
});

/******************************************************************
******************** COMPOSITION SEARCH ******************
*******************************************************************/
$(document).ready(function() {
  $(".composition").click(function() {
    var composition= $(this).attr("value");
    function search_composition() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_composition: composition},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_composition();
  });
});

/********************************************************
******************** CLASS SEARCH ******************
*********************************************************/
$(document).ready(function() {
  $("#classSearchBtn").click(function() {
    var classification= $("input[name='class']:checked").val();
    function search_class() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_class: classification},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_class();
  });
});

/********************************************************
******************** COLOR SEARCH ******************
*********************************************************/
$(document).ready(function() {
  $(".color").click(function() {
    var color= $(this).attr("value");
    function search_color() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_color: color},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_color();
  });
});

/*************************************************************
******************** FRACTURE SEARCH ******************
**************************************************************/
$(document).ready(function() {
  $( "#fractureSelect" ).change(function() {
    var fracture= $("#fractureSelect").val();
    function search_fracture() {
      $.ajax({
        type: "POST",
        url: "server.php",
        data: {mineral_fracture: fracture},
        success: function(data) {
          $("#content").html(data);
        }
      });
    }
    search_fracture();
  });
});
