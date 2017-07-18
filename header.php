<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
          <?php
              if(defined('TITLE')) {
                  echo TITLE;
              } else {
                  echo 'De Beaute - Your Ideal Online Beauty Appointment';
              }
          ?>
        </title>
        <meta charset="windows-1252">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="logo.png" sizes="16x16" type="image/png">
        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>

        <!--Awesome Icon-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Custom CSS-->
        <link href="custom.css" rel="stylesheet" type="text/css"/>
      </head>

      <body>
          <!--Navigation-->
          <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php">De Beaute</a>
                  </div><!--/.nav header-->
                  <div id="navbar" class="navbar-collapse collapse">
                      <ul class="nav navbar-nav">
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="face.php">FACE <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="face.php">Facial</a></li>
                              </ul>
                          </li>
                          <li class="dropdown">
                              <a class="dropdown-toggle" data-toggle="dropdown" href="nail.php">NAILS <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                  <li><a href="nail.php">Manicure</a></li>
                              </ul>
                          </li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right">
                          <!--li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp; SIGN UP</a></li>
                          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; LOGIN</a></li-->
                          <?php
                            if(isset($_SESSION['u_ID'])){
                              echo'<li class="dropdown">';
                              echo'<a class="dropdown-toggle" data-toggle="dropdown" href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp; MY PROFILE <span class="caret"></span></a>';
                              echo'<ul class="dropdown-menu">';
                              echo'<li>&nbsp; Welcome,&nbsp; ' .$_SESSION['u_Uname']. '!</li>';
                              echo'<li class="divider"></li>';
                              echo'<li><a href="profile.php">Edit</a></li>';
                              echo'</ul>';
                              echo'</li>';
                              echo'<form action="includes/logout_inc.php" method="post" class="pull-right">
                                      <button class="btn-sm btn-warning navbar-btn" type="submit" name="logoutBtn">LOG OUT</button>
                                  </form>';
                            } else {
                                echo'<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>&nbsp; SIGN UP</a></li>
                                  <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp; LOGIN</a></li>';
                            }
                          ?>
                      </ul>
                  </div>
              </div><!--/.container-->
          </nav>
