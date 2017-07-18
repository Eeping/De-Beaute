<?php
    define('TITLE', 'Manicure - De Beaute');
    include 'header.php';
?>
        <!--Page Content-->
        <div class="container">
            <h2>Manicures</h2><hr/>
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
                        <td><img src="Images/chezNail.png" height="200" width="300"></td>
                        <td>Chez Nails Salon &amp; Spa</td>
                        <td>George Town, Penang</td>
                        <td>
                          Chez Nails provides services as below: <br/><br/>
                          <p>Manicure &amp; Pedicure - RM344</p>
                          <p>Gel Manicure &amp; Gel Pedicure - RM744</p>
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
                        <td><img src="Images/nailworld.jpg" height="200" width="300"></td>
                        <td>Nail World</td>
                        <td>George Town, Penang</td>
                        <td>
                          Nail World provides profesional nail art service and nail art academy for those who are intrested on nailart design.<br/></form><br/>
                          <p>Standard Manicure</p>
                          <p>Deluxe Manicure</p>
                          <p>OPI Spa Manicure</p>
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
                        <td><img src="Images/nailInfinity.jpg" height="200" width="300"></td>
                        <td>Nail Infinity Salon &amp; Academy</td>
                        <td>George Town, Penang</td>
                        <td>
                          NAIL INFINITY SALON &amp; ACADEMY  is a beauty house that provides professional manicure, pedicure and waxing service to customers at an affordable price.<br/><br/>
                          <p>Gelish</p>
                          <p>Nail Art &amp; 3D Design</p>
                          <p>Acrylic Extension Nail</p>
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
                        <td><img src="Images/bkkSuper.jpg" height="200" width="300"></td>
                        <td>Bangkok Super Nails</td>
                        <td>Bayan Baru, Penang</td>
                        <td>Bangkok Super Nails provides manicure-pedicure services and also Henna/Mehendi services for daily beauty or marriages.</td>
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
                        <td><img src="Images/nailhut.png" height="200" width="300"></td>
                        <td>Nail Hut</td>
                        <td>Tanjung Tokong, Penang</td>
                        <td>Nail Hut provide nail care services like manicures and pedicures at a great price.</td>
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
                        <td><img src="Images/nail-bar.jpg" height="200" width="300"></td>
                        <td>Nail Bar</td>
                        <td>Jalan Burma, Penang</td>
                        <td>Nail Bar provides minimalist design.</td>
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
