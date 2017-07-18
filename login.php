<?php
    define('TITLE', 'Login - De Beaute');
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
            <form action="includes/login_inc.php" class="form-signin" name="loginForm" id="loginForm" method="post">
            <h3 class="page-header text-center" style="font-size:26px; font-weight:bold">Welcome to De Beaute</h3>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="inputUsername" name="inputUsername" placeholder="Username" required />
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required />
                    </div>
                    <div class="help-block with-errors"></div>
                </div>

                <button type="submit" class="btn btn-success round pull-right" name="loginBtn">Login</button>
            </form>
        </div>

<?php
    include'footer.php';
?>
