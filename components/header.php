  <!-- nav top -->

  <ul class="nav justify-content-end bg-success">
      <li class="nav-item">
          <a class="nav-link text-white text-decoration-underline" href="./login.php">Login</a>
      </li>
      <li class="nav-item">
          <a class="nav-link text-white text-decoration-underline" href="./volunteer-form.php">Become a volunteer</a>
      </li>
  </ul>

  <div class="container-fluid">
      <header
          class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0  border-bottom bg-dark">
          <div class="col-md-3 mb-2 mb-md-0">
              <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                  <img src="./images/logo/nav_logo.png" class="logo" width="150px" alt="Logo Image">
              </a>
          </div>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
              <?php getNav($page) ?>
          </ul>

          <div class="col-md-3 text-end p-3">
              <a href="./contact-us.php"><button type="button" class="btn btn-outline-light me-2 ">Contact us</button></a>
          </div>
    </header>
  </div>
          <?php

            function getNav($page)
            {
                if ($page == 'Home') {
                    echo '
                    <li><a href="index.php" class="nav-link px-2 text-success">Home</a></li>
                    <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                    <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                    <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
                ';
                } else if ($page == 'About') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-success">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
            ';
                } else if ($page == 'Plan your visit') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-success">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
            ';
                } else if ($page == 'Events') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-success">Events</a></li>
            ';
                } else if ($page == 'Animals') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
            ';
                } else if ($page == 'Contact') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
            ';
                } else if ($page == 'Volunteer') {
                    echo '
                <li><a href="index.php" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="about-us.php" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="plan-your-visit.php" class="nav-link px-2 text-white">Plan your visit</a></li>
                <li><a href="events.php" class="nav-link px-2 text-white">Events</a></li>
            ';
                } 
            }

            ?>