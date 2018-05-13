<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Index</title>
      <link rel="stylesheet" href="Aqua.css">
  </head>

  </head>
  <body>
    <ul class="ul">
      <a href="Home.php"><li> Home </li></a>
        <a href="Business.php"><li> Our Businesses </li></a>
        <a href="water.php"><li> Our Water </li></a>
          <a href="Technology.php"> <li> Technology </li></a>
              <a href="Orders.php"><li> Place your orders </li></a>
              <h3 class="index">Aquahills Global Investment Ltd.</h3>
              <?php if (isset ($_SESSION['success'])): ?>
                        <div class="pat">

                        <h2>
                            <?php
                                echo $_SESSION['success'];
                                unset ($_SESSION['success']);
                                                       ?>
                      </h2>
                      <?php endif ?>



  </body>
</html>
