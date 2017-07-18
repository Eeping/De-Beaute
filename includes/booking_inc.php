<?php
include 'db_inc.php';

  $firstName = $_POST['inputFirstName'];
  $lastName =$_POST['inputLastName'];
  $Bkday =$_POST['day'];
  $Bkmonth =$_POST['month'];
  $Bkyear =$_POST['year'];
  $Bktime =$_POST['selectTime'];
  $BkService = $_POST['selectService'];
  $BkShop =$_POST['selectLocation'];

  $sql="INSERT INTO booking(bookFirst, bookLast, bookDay, bookMonth, bookYear, bookTime, bookService, bookSalon)
  VALUES ('$firstName', '$lastName', '$Bkday', '$Bkmonth', '$Bkyear', '$Bktime', '$BkService', '$BkShop')";
  $result = mysqli_query($conn, $sql);

  header("Location: ../booking.php");
  exit();
?>
