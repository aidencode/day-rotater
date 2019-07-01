$(document).ready(function(){

var d = new Date();
var n = d.getDay();

  if (n == 0) {
    $(".include-wrapper").addClass("sunday");
  } else if (n == 1) {
    $(".include-wrapper").addClass("monday");
  } else if (n == 2) {
    $(".include-wrapper").addClass("tuesday");
  } else if (n == 3) {
    $(".include-wrapper").addClass("wednesday");
  } else if (n == 4) {
    $(".include-wrapper").addClass("thursday");
  } else if (n == 5) {
    $(".include-wrapper").addClass("friday");
    $("#fridayAudio").get(0).play();
    $("#fridayAudio")[0].volume = 0.2;
  } else if (n == 6) {
    $(".include-wrapper").addClass("saturday");
  } else if (n == 0) {
    $(".include-wrapper").addClass("sunday");
  }

});
