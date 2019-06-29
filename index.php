<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styling/master.css">
    <link rel="stylesheet" href="./styling/rain.css">
    <audio id="fridayAudio" loop src="./friday.mp3"></audio>

    <title>Day of mood</title>
  </head>
    <body>

      <!-- SWITCH INCLUDE FOR DAY OF WEEK-->
      <?php
      include 'function.php';
       ?>

      <!-- JQUERY PLUGINS -->
       <script
       src="https://code.jquery.com/jquery-3.4.1.min.js"
       integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
       crossorigin="anonymous"></script>
       <script  type="text/javascript" src="./js/jquery.vide.js"></script>
       <script type="text/javascript" src="./js/day-script.js"></script>
       <script type="text/javascript" src="./js/weather.js"></script>
       <!-- TYPED.JS -->
       <script type="text/javascript" src="./js/typed.min.js"></script>


       <?php

       if ($dayOfWeek == 0) {
         echo '  <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS SUNDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';

       } else if ($dayOfWeek == 1) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS MONDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       } else if ($dayOfWeek == 2) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS TUESDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       } else if ($dayOfWeek == 3) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS WEDNESDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       } else if ($dayOfWeek == 4) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS THURSDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       } else if ($dayOfWeek == 5) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS FRIDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       } else if ($dayOfWeek == 6) {
         echo ' <script type="text/javascript">
                 var typed = new Typed(".day", {
                   strings: ["TODAY IS SATURDAY!"],
                   typeSpeed: 110,
                   backSpeed: 100,
                   loop: true,
                   startDelay: 1500,
                   showCursor: false,
                   fadeOut: true,
                   fadeOutClass: "typed-fade-out",
                   backDelay: 4000
                 });
                </script>';
       }

        ?>
       </script>
    </body>
</html>
