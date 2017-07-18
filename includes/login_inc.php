<?php
session_start();

if(isset($_POST['loginBtn'])) {

  include 'db_inc.php';

  $userName = mysqli_real_escape_string($conn, $_POST['inputUsername']);
  $pwd = mysqli_real_escape_string($conn, $_POST['inputPassword']);

  //Error handlers
  //Check if inputs are empty
  if(empty($userName) || empty($pwd)) {
    header("Location: ../index.php?login=empty");
    exit();
  } else {
      $sql = "SELECT * FROM users WHERE userUname='$userName'";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);
      if($resultCheck < 1) {
        header("Location: ../index.php?login=error");
        exit();
      } else {
          if($row = mysqli_fetch_assoc($result)) {
            //De-hashing the password
            $hashedPwdCheck = password_verify($pwd, $row['userPwd']);
            if($hashedPwdCheck == false) {
                header("Location: ../index.php?login=error");
                exit();
            } elseif($hashedPwdCheck == true) {
                //Log in the user here
                $_SESSION['u_ID'] =$row['userID'];
                $_SESSION['u_firstN'] =$row['userFirst'];
                $_SESSION['u_lastN'] =$row['userLast'];
                $_SESSION['u_email'] =$row['userEmail'];
                $_SESSION['u_Uname'] =$row['userUname'];
                header("Location: ../index.php?login=success");
                exit();
            }
          }
      }
  }
} else {
    header("Location: ../index.php?login=error");
    exit();
}
?>
