$(document).ready(function(){
    $.ajax({
        url: "http://api.openweathermap.org/data/2.5/weather?q=Southampton,uk&units=celcius&appid=cc650d96a409777c3911668c35233085",
        type: "GET",
        dataType: "jsonp",
        success: function(data){
        var weather = data.weather[0].main;

        if (weather != "Rain") {
          $(".rainOutput").removeClass("rain")
        } else {
          $(".rainOutput").addClass("rain")
        }

      }
    });

  });
