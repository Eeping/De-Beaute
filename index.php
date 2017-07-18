<?php
  define('TITLE', 'De Beaute - Your Ideal Online Beauty Appointment');
  include_once 'header.php';
?>
<head>
    <style>
        .step {
            padding-top:25px;
            padding-bottom:25px;
        }

        .jumbotron {
            background-color: transparent;
            padding-top: 120px;
        }

        .bg-1{
            background-color: #F5F5F5;
        }
    </style>
</head>
        <!--Page Content-->
        <div class="container full-width-img">
            <div class="jumbotron text-center">
                <h1 style="font-size:50px; color:#fff">De Beaute</h1>
                <p style="color:#fff">Browse &amp; Discover Your Beauty </p>
                <form>
                  <div class="input-group">
                    <input type="text" class="form-control" id="searchBox" name="searchBox" placeholder="Search..."/>
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-danger outline"><span class="glyphicon glyphicon-search"></span></button>
                    </div>
                  </div>
                </form>
              </div>
        </div>

        <div class="container">
          <?php
              if(isset($_SESSION['u_ID'])){
                  echo"You are logged in!";
              }
          ?>
            <div class="row step">
                <div class="col-sm-4">
                    <h4 class="text-center" style="font-weight:bold">1. Discover</h4>
                    <p class="text-center">Search for beauty &amp; wellness salons in your area</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center" style="font-weight:bold">2. Book</h4>
                    <p class="text-center">Choose your service and book an appointment directly from the salon's calendar</p>
                </div>
                <div class="col-sm-4">
                    <h4 class="text-center" style="font-weight:bold">3. Enjoy</h4>
                    <p class="text-center">Sit back and enjoy your unique beauty &amp; wellness experience</p>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-1">
            <div class="container">
              <h3 style="font-weight:bold">Skin Care Guide</h3>
              <p style="font-style:italic">Be bold. Be daring. Be simply beautiful to blossom into new you.</p>
              <div class="row">
                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="Images/aloevera.jpg" alt="Aloe Vera Gel">
                          <div class="caption">
                              <h3 style="font-size:13pt; font-weight:bold">How to Make Aloe Vera Gel</h3>
                              <p>Aloe vera gel contains numerous vitamins and minerals that helps to replenish your body. Learn to make aloe vera gel by yourself now!</p>
                              <p><a href="https://wellnessmama.com/121550/aloe-vera-gel/">Read More</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="Images/nose.jpg" alt="Skin Blemishes">
                          <div class="caption">
                              <h3 style="font-size:13pt; font-weight:bold">How to Get Rid of Blemishes</h3>
                              <p>Blemishes could be very annoy. They tend to develop mostly on areas of your face especially nose, forehead and chin. Here's the way to banish blemishes.</p>
                              <p><a href="http://www.howtoremovethat.com/how-to-get-rid-of-blemishes.html">Read More</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="Images/mask.jpg" alt="Homemade Facial Mask">
                          <div class="caption">
                              <h3 style="font-size:13pt; font-weight:bold">Homemade Facial Mask</h3>
                              <p>Worry about dry skin? Don't want to spend money to buy facial mask? Don't worry! You can learn to make your own facial mask to restore your skin!</p>
                              <p><a href="http://www.rd.com/health/beauty/homemade-facial-masks-recipes/">Read More</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="Images/mask2.jpg" alt="Homemade Facial Mask">
                          <div class="caption">
                              <h3 style="font-size:13pt; font-weight:bold">Facial Mask that Suits Your Skin Type</h3>
                              <p>Different skin type use different treatment. Not sure which facial mask works best for your skin? Read here to know more. </p>
                              <p><a href="http://www.rd.com/health/beauty/best-face-mask-for-your-skin-type/">Read More</a></p>
                          </div>
                      </div>
                  </div>

                  <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                          <img src="Images/water.jpg" alt="Drinking Water">
                          <div class="caption">
                              <h3 style="font-size:13pt; font-weight:bold">Water. Beauty.</h3>
                              <p>Why drinking copious amount of water is vital for great skin?</p>
                              <p><a href="http://palmbeachplastics.com/why-drinking-copious-amounts-of-water-every-day-is-vital-for-great-skin/">Read More</a></p>
                          </div>
                      </div>
                  </div>
                </div>
            </div>
        </div>

<?php
    include_once 'footer.php';
?>
