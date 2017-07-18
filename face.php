<?php
    define('TITLE', 'Facial - De Beaute');
    include 'header.php';
?>
        <!--Page Content-->
        <div class="container">
            <h2>Face Treatments</h2><hr/>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Beauty Salon</th>
                        <th>Location</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="Images/asterSpring.jpg" height="200" width="300"></td>
                        <td>AsterSpring</td>
                        <td>Bayan Lepas, Penang</td>
                        <td>
                          AsterSpring is world-leading skincare and wellness products incorporating cutting-edge technology. It provides safe, effective &amp; personalized skin health solutions.<br/><br/>
                          <p>Fundamental Facial Treatment</p>
                          <p>Enhancing Facial Treatment</p>
                        </td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/skinsociety.jpg" height="200" width="300"></td>
                        <td>Skin Society Facial Bar &amp; Salon</td>
                        <td>George Town, Penang</td>
                        <td>Skin Society Facial Bar &amp; Salon</td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/trueHarmony.jpg" height="200" width="300"></td>
                        <td>True Harmony</td>
                        <td>George Town, Penang</td>
                        <td>
                          True Harmony provides wholesome and extensive beauty treatments. Experience the specialized techniques of our intensive body slimming therapy aimed to promote toxin elimination while it firms and tones.<br/><br/>
                          <p>Moisture Quenching Facial - RM68</p>
                          <p>Pearl Silk Facial - RM48</p>
                        </td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/herbaline.jpg" height="200" width="300"></td>
                        <td>Herbaline</td>
                        <td>George Town, Penang</td>
                        <td>
                          Herbaline is a professional beauty spa which offers facial treatments service in Penang, Malaysia. It include skin care treatment, pimple treatment &amp; etc.<br/><br/>
                          <p>Double Cleansing Treatment - RM73</p>
                          <p>Dead Cells Removal &amp; Moisturising Treatment - RM90</p>
                          <p>Face Moisturing &amp; Hydrating Treatment - RM104</p>
                        </td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/bella.jpg" height="200" width="300"></td>
                        <td>Bella Skin Care</td>
                        <td>George Town, Penang</td>
                        <td>
                          Bella Skin Care provides skin care treatment through natural and holistic approach.<br/><br/>
                          <p>Teen Refreshing Facial</p>
                          <p>Skin Recovery Facial</p>
                          <p>Essential Hydrating Facial</p>
                        </td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td><img src="Images/faceveil.jpg" height="200" width="300"></td>
                        <td>Faceveil Beauty &amp; Wellness</td>
                        <td>George Town, Penang</td>
                        <td>
                          Faceveil Beauty &amp; Wellness provides brilliant youthful skin with cutting-edge technology and great products.<br/><br/>
                          <p>Medical Aesthetic Facial</p>
                          <p>Customization Facial Treatment</p>
                        </td>
                        <td>
                          <?php
                          if(isset($_SESSION['u_ID'])){
                              echo'<form action="booking.php" method="post"><button type="submit" class="btn btn-info round pull-right" name="bookBtn">Book Now </button></form>';
                          } else {
                              echo'<button type="submit" class="btn btn-info round pull-right" name="bookBtn" onclick="bookBtnOnClick()">Book Now </button>';
                          }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

<?php
    include 'footer.php';
?>
