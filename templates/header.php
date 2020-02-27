<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Event-Planner.php</title>
    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- own css stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">

      //Getting each value of categories and appending to box with id of selectedtext which has the name of category that corresponds with the datebase    
      $(document).ready(function () {
      $('.chkbox').click(function () {
      var text = "";
      $('.chkbox:checked').each(function () {
        text += $(this).val() + ',';
      });
      text = text.substring(0, text.length - 1);
      $('#selectedtext').val(text);
      var count = $("[type='checkbox']:checked").length;
  });
});

    </script>
</head>
<body>
<nav>
    <div class="nav-wrapper" style=" background-color: #CFF2FF !important;">
        <div class="container">
        <a href="../index.php" class="brand-logo" style="color: #3D4849 !important;">EventPlanner</a>
        <a href="#" class="sidenav-trigger" data-target="mobile-links">
          <div class="material-icons">menu</div>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="event/createevent.php" style="color: #3D4849 !important;">Create Event</a></li>
          <li><a href="../index.php" style="color: #3D4849 !important;">Home</a></li>
          <li><a href="account/login.php" style="color: #3D4849 !important;">Login</a></li>
        </ul>
      </div>
    </div>
</nav>

  <ul class="sidenav" id="mobile-links" id="mobile-links">
      <li>
        <div class="user-view">
          <div class="background">
            <img src="http://materializecss.com/images/office.jpg" alt="Background User View" alt="Background user view">
          </div>
          <a href="#user"><img class="circle" src="http://materializecss.com/images/yuna.jpg" alt="Avatar User View"></a>
          <a href="#name"><span class="white-text name">Event Planner</span></a>
          <a href="#name"><span class="white-text name">eventplanner@ev.io</span></a>
        </div>
      </li>
        <li><a href="#"><span>Home</span>
                <i class="material-icons left">Home</i></a></li>
        <li><a href="#"><span>Create Event</span>
                <i class="material-icons left">create</i></a></li>
        <li><a href="#"><span>Login</span>
                <i class="material-icons left">https</i></a></li>
    </ul>


    
