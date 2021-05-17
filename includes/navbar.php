<style type="text/css">
  .icofont-navigation-menu:before {
    content: "\efa2";
    color: black;
}

.btn {
    margin-top: 10px;
    margin-bottom: 18px;
    margin-right: 18px;
    margin-left: 15px;
    padding: 2px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
    right: 222px;
  }
}  

</style>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><span style="color: black;">Hum Sabka Himachal</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

       <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="covid-dashboard.php">Covid 19 Dashboard</a></li>
          <li class="drop-down"><a href="">Services</a>

            <ul>
              <li class="drop-down"><a href="#">Health Care</a>
                <ul>
                  <li><a href="covid-centers.php">Public Health Care</a></li>
                  <li><a href="medical.php">Medical</a></li>
                  <li><a href="blood-donate.php">Blood Bank</a></li>
                  <li><a href="msme.php">MSME Products</a></li>
                </ul>
              </li>
              <li class="drop-down"><a href="#">Disaster Management</a>
              <ul>
                  <li><a href="donate-equipment.php">Donations</a></li>
                  <li><a href="govt.php">Government Services</a></li>
                  <li><a href="epass.php">Movement Pass</a></li>
                  <li><a href="volunteer.php">Volunteers</a></li>
                  <li><a href="fencing.php">Cluster GeoFencing</a></li>
                </ul>
              </li>  
              <li class="drop-down"><a href="#">Education & Skilling</a>
                <ul>
                  <li><a href="hr.php">HR Recruitment</a></li>
                  <li><a href="courses.php">Online Vocational Courses</a></li>
                  <li><a href="blog">Man Power</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.php">Contact</a></li>
          <li class="get-started">
            <form action="logout.php" method="POST"> 
            <button type="submit" name="user_logout_btn" class="btn btn-primary">Logout</button>
          </form></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

