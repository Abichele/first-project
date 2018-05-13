
<?php include ('server.php'); ?>
<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title> Orders</title>
    <link rel="stylesheet" href="Aqua.css">
  </head>
  <body class="home">
    <ul class="ul">
      <a href="Home.php"><li> Home </li></a>
        <a href="Business.php"><li> Our Businesses </li></a>
        <a href="water.php"><li> Our Water </li></a>
          <a href="Technology.php"> <li> Technology </li></a>
              <a href="Orders.php"><li> Place your orders </li></a>
    </ul>
    <div class="contacts">
          <p> Your satisfaction is our top priority. </p>
            <p> For quick and urgent delivery, please contact:</p>
            <p>  <img src="contact.jpg" height="50px" width="50px" alt="contact"> 08037609106</p>
            <p>  <img src="contact.jpg" height="50px" width="50px" alt="contact"> 09096238484 </p>
            <p>  <img src="contact.jpg" height="50px" width="50px" alt="contact"> 08064814852 </p>
            <p> You can also place your order below: </p>
                <!-- Show errors here -->
                  <?php include ('errors.php'); ?>
            <form class="order" action="index.php" method="post">
              <label> Name: </label>
                <input type="text" name="Name" placeholder= "Name" value="">
              <label> Your Address: </label>
              <input type="text" name="Address" placeholder= "Address" value="">
              <label> Phone Number: </label>
              <input type="text" name="Phone" placeholder=" 08012345678" value="">
              <label> Your Order: </label>
              <input type="text" name="Order"  placeholder="number of bags "value="">
              <input type="submit" style= "background-color: green; color: white;"  name="submit" value="Send">
            </form>

            </div>
  </body>
</html>
