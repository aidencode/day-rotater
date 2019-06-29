<div class="day-title">
  <?php
  $dayOfWeek = date("w");
  
  switch ($dayOfWeek) {
    case 1:
      include "./includes/monday.php";
      break;
    case 2:
        include "./includes/tuesday.php";
      break;
    case 3:
        include "./includes/wednesday.php";
      break;
    case 4:
        include "./includes/thursday.php";
      break;
    case 5:
        include "./includes/friday.php";
        break;
    case 6:
        include "./includes/saturday.php";
      break;
    case 0:
        include './includes/sunday.php';
      break;

    default:
      // code...
      break;
  }
   ?>
</div>
