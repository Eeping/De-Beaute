<?php
if(isset($_POST['updateBtn'])) {

  include_once'db_inc.php';

  $firstName = mysqli_real_escape_string($conn, $_POST['inputFirstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['inputLastName']);
  $userName = mysqli_real_escape_string($conn, $_POST['inputUsername']);
  $email = mysqli_real_escape_string($conn, $_POST['inputEmail']);
  $pwd = mysqli_real_escape_string($conn, $_POST['inputPassword']);
  $id = mysqli_real_escape_string($conn, $_POST['custID']);

  //Error handlers
  //Check for empty fields
  if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($pwd))
  {
    header("Location: ../profile.php?profile=empty");
    exit();
  } else {
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName))
    {
      header("Location: ../profile.php?profile=invalid");
      exit();
    } else {
      //Check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: ../profile.php?profile=email");
          exit();
        } else {
            $sql = "SELECT * FROM users WHERE userUname='$userName'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
              header("Location: ../profile.php?profile=usertaken");
              exit();
            } else {
                //Hashing the password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //update the user info into database
                $sql = "UPDATE users SET userFirst='$firstName', userLast='$lastName', userUname='$userName', userEmail='$email', userPwd='$hashedPwd' WHERE userID=$id";
                mysqli_query($conn, $sql);
                header("Location: ../profile.php?profile=success");
                exit();
            }
        }
    }
  }

} else { //redirect user to signup page
  header("Location: ../profile.php");
  exit();
}
?>
