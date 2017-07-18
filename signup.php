<?php
  define('TITLE', 'Sign Up - De Beaute');
  include'header.php';
?>
<head>
    <style>
        body{
            background-color: #F5F5F5;
        }

        .wrapper{
            margin-top: 80px;
            margin-bottom: 80px;
        }
    </style>
</head>
        <!--Page Content-->
        <div class="container wrapper">
            <form action="includes/register_inc.php" class="form-signin" name="registerForm" method="post">
            <h3 class="page-header text-center" style="font-size:26px; font-weight:bold">New to De Beaute? Sign Up Now!</h3>
            <div class="form-inline">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="inputFirstName" name="inputFirstName" placeholder="First Name" required/>
                    </div>
                </div>
                <div class="form-group pull-right">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="inputLastName" name="inputLastName" placeholder="Last Name" required/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Username" required/>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/>
                </div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required/>
                </div>
                <div class="help-block">Must contain at least 8 or more characters, at least one numeric, one uppercase and lowercase letter</div>
            </div>

            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" class="form-control" id="inputRePassword" name="inputRePassword" placeholder="Re-type Password" onchange="checkPasswordMatch()" required/>
                </div>
                <div class="help-block"></div>
            </div>

            <button type="submit" class="btn btn-danger round pull-right" name="signupBtn">Register</button>
            </form>
        </div>

        <!--script type="text/javascript">
        function checkPasswordMatch() {
            var password = $("#inputPassword").val();
            var confirmPassword = $("#inputRePassword").val();

            if (password != confirmPassword)
                $(".help-block").html("Passwords do not match!");
            else
                $(".help-block").html("Passwords match.");
        }

        $(document).ready(function () {
           $("#inputPassword, #inputRePassword").keyup(help-block);
        });

      </script-->

<?php
    include'footer.php';
?>
