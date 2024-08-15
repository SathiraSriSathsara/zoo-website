<div class="container-fluid">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-0 mb-4 border-bottom bg-dark">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="./images/logo/nav_logo.png" class="logo" width="150px" alt="Logo Image">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php getNav($page) ?>
        </ul>

        <div class="col-md-3 text-end p-3">
            <a href="./login.html"><button type="button" class="btn btn-outline-light me-2 ">Login</button></a>
            <button type="button" class="btn btn-success">Get membership</button>
        </div>

        <?php

        function getNav($page)
        {
            if ($page == 'home') {
                echo '
                    <li><a href="#" class="nav-link px-2 text-success">Home</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">About us</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Food outlets</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Events</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Animals</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
                ';
            } else if ($page == 'About') {
                echo '
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-success">About us</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Food outlets</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Events</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Animals</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            ';
            } else if ($page == 'Food') {
                echo '
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="#" class="nav-link px-2 text-success">Food outlets</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Events</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Animals</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            ';
            }else if ($page == 'Events') {
                echo '
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Food outlets</a></li>
                <li><a href="#" class="nav-link px-2 text-success">Events</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Animals</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            ';
            } else if ($page == 'Animals') {
                echo '
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Food outlets</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Events</a></li>
                <li><a href="#" class="nav-link px-2 text-success">Animals</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Contact</a></li>
            ';
            } else if ($page == 'Contact') {
                echo '
                <li><a href="#" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="#" class="nav-link px-2 text-white">About us</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Food outlets</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Events</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Animals</a></li>
                <li><a href="#" class="nav-link px-2 text-success">Contact</a></li>
            ';
            } 
        }

        ?>