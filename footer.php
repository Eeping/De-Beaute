<head>
  <style>
      .footer{
          background-color: #303030;
      }
  </style>
</head>
<!--Footer-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 style="color:#C8C8C8; letter-spacing:1px">ABOUT US</h4>
                <p style="color:#E8E8E8; font-size: 10.5pt">De Beaute is an online beauty appointment. Customer can discover new services, book appointment online and get inspired! </p>
            </div>
            <div class="col-sm-4">
                <h4 style="color:#C8C8C8; letter-spacing:1px">Find Us On:</h4>
                <p style="color:#E8E8E8">
                  <i style="font-size:24px; color:white" class="fa">&#xf099;</i> &nbsp;
                  <i style="font-size:24px; color:white" class="fa">&#xf082;</i> &nbsp;&nbsp;
                  <i style="font-size:24px; color:white" class="fa">&#xf0d2;</i>
                </p>
            </div>
        </div>

    </div>
</div>

<!--Check password match -->
<script type="text/javascript">
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

</script>

<!--Validate user is logged in to proceed booking-->
<script type="text/javascript">
  function bookBtnOnClick(){
      alert("Please log in to book an appointment!");
  }
</script>

<!-- Bootstrap Core JS-->
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
