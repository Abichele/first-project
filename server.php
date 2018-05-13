<?php
  session_start();

  $Name="";
  $Address="";
  $Phone="";
  $Order="";
  $errors = array();


  $db = mysqli_connect('localhost', 'root','','order');

if(isset($_POST['submit'])){
$Name = mysql_real_escape_string($_POST['Name']);
  $Address = mysql_real_escape_string($_POST['Address']);
      $Phone = mysql_real_escape_string($_POST['Phone']);
          $Order = mysql_real_escape_string($_POST['Order']);


if(empty($Name)){
     array_push($errors, "Name is required");
     }
if(empty($Address)){
     array_push($errors, "Address is required");
     }
   if(empty($Phone)) {
      array_push($errors, "Phone Number is required");
    }
      if(empty($Order)){
          array_push($Order, "Number of bags is required");
    }
    else {

  array_push($errors, "All fields are required!.");
 }

  if(count($errors) == 0) {
    $sql = "INSERT INTO order (Name, Address, Phone, Order, )  VALUES ('$Name', '$Address', '$Phone', '$Order')";
              mysqli_query($db, $sql);
                 $_SESSION['Name'] = $Name;
                $_SESSION['success'] = "Thank You for Your Patronage!!..";
                 header('location: index.php');
               }

         }

 ?>
