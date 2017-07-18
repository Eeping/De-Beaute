<?php
if(isset($_POST['signupBtn'])) {

  include_once'db_inc.php';

  $firstName = mysqli_real_escape_string($conn, $_POST['inputFirstName']);
  $lastName = mysqli_real_escape_string($conn, $_POST['inputLastName']);
  $userName = mysqli_real_escape_string($conn, $_POST['inputUsername']);
  $email = mysqli_real_escape_string($conn, $_POST['inputEmail']);
  $pwd = mysqli_real_escape_string($conn, $_POST['inputPassword']);

  //Error handlers
  //Check for empty fields
  if(empty($firstName) || empty($lastName) || empty($userName) || empty($email) || empty($pwd))
  {
    header("Location: ../signup.php?signup=empty");
    exit();
  } else {
    //Check if input characters are valid
    if(!preg_match("/^[a-zA-Z]*$/", $firstName) || !preg_match("/^[a-zA-Z]*$/", $lastName))
    {
      header("Location: ../signup.php?signup=invalid");
      exit();
    } else {
      //Check if email is valid
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          header("Location: ../signup.php?signup=email");
          exit();
        } else {
            $sql = "SELECT * FROM users WHERE userUname='$userName'";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0) {
              header("Location: ../signup.php?signup=usertaken");
              exit();
            } else {
                //Hashing the password
                $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                //Insert the user into database
                $sql = "INSERT INTO users (userFirst, userLast, userEmail, userUname, userPwd) VALUES ('$firstName', '$lastName', '$email', '$userName', '$hashedPwd');";
                mysqli_query($conn, $sql);
                header("Location: ../signup.php?signup=success");
                exit();
            }
        }
    }
  }

} else { //redirect user to signup page
  header("Location: ../signup.php");
  exit();
}
?>
