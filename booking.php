<?php
  define('TITLE', 'Booking Form - De Beaute');
  include 'header.php';
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
            <form action="includes/booking_inc.php" class="form-signin" name="bookingForm" method="post">
            <h3 class="page-header text-center" style="font-size:26px; font-weight:bold">Book an appointment</h3>

            <div class="form-group">
                  <label class="radio-inline"><input type="radio" name="Greet">Mr.</label>
                  <label class="radio-inline"><input type="radio" name="Greet">Mrs.</label>
                  <label class="radio-inline"><input type="radio" name="Greet">Ms.</label>
            </div>

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
                <label for="date">Choose a date:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <?php
                        function dateSelector(){
                          $months = array(1 => 'January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                          echo'<select class="form-control" name="day">';
                          for($day = 1; $day <= 31; $day++){
                            echo"\n<option value=\"$day\">$day</option>";
                          }
                        echo'</select>';

                          echo'<select class="form-control" name="month">';
                          foreach($months as $key => $value ){
                              echo"\n<option value=\"$key\">$value</option>";
                          }
                        echo'</select>';

                        echo'<select class="form-control" name="year">';
                        $start_year = date('Y');
                        for($y = $start_year; $y <= $start_year + 10; $y++){
                          echo"\n<option value=\"$y\">$y</option>";
                        }
                        echo'</select>';
                        }

                        dateSelector();
                    ?>
                </div>
            </div>

            <div class="form-group">
                <label for="time">Choose a time:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-time"></i></span>
                    <select class="form-control" name="selectTime">
                        <option value="10:30:00">10:30 A.M</option>
                        <option value="11:00:00">11:00 A.M</option>
                        <option value="12:00:00">12:00 P.M</option>
                        <option value="13:00:00">01:00 P.M</option>
                        <option value="14:00:00">02:00 P.M</option>
                        <option value="15:00:00">03:00 P.M</option>
                        <option value="16:00:00">04:00 P.M</option>
                        <option value="17:00:00">05:00 P.M</option>
                        <option value="18:00:00">06:00 P.M</option>
                        <option value="19:00:00">07:00 P.M</option>
                        <option value="20:00:00">08:00 P.M</option>
                        <option value="21:00:00">09:00 P.M</option>
                        <option value="22:30:00">10:30 P.M</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="service">Choose a service:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-scissors"></i></span>
                    <select class="form-control" name="selectService">
                        <option value="facial">Facial</option>
                        <option value="manicure">Manicure</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="venue">Choose a beauty salon:</label>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                    <?php
                        function targetLocation(){
                          $shop = array(1 => 'AsterSpring', 'Skin Society Facial Bar & Salon', 'True Harmony', 'Herbaline', 'Bella Skin Care', 'Faceveils Beauty & Wellness', 'Chez Nails', 'Nail World', 'Nail Infinity', 'Bangkok Super Nails', 'Nail Hut', 'Nail Bar');
                          echo'<select class="form-control" name="selectLocation">';
                          foreach($shop as $key => $value ){
                              echo"\n<option value=\"$key\">$value</option>";
                          }
                        echo'</select>';
                        }

                        targetLocation();
                    ?>
                </div>
            </div>


            <button type="submit" class="btn btn-warning round pull-right" name="bookBtn">BOOK NOW!</button>
            </form>
        </div>

<?php
    include 'footer.php';
?>
