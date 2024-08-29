<?php 
function getNav($user, $page) {
    if ($user === 'Admin') {
        echo '
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
                        <div class="position-sticky bg-dark vh-100">
                            <div class="pt-3">
                                <hr>
                                <div class="container">
                                    <ul class="nav nav-pills flex-column mb-auto">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link ' . ($page === 'Events' ? 'active' : 'text-white') . '" aria-current="page">Events</a>
                                        </li>
                                        <li>
                                            <a href="members.php" class="nav-link ' . ($page === 'Members' ? 'active' : 'text-white') . '">Members</a>
                                        </li>
                                        <li>
                                            <a href="food_outlets.php" class="nav-link ' . ($page === 'Food outlets' ? 'active' : 'text-white') . '">Food outlets</a>
                                        </li>
                                        <li>
                                            <a href="admins.php" class="nav-link ' . ($page === 'Admins' ? 'active' : 'text-white') . '">Admins</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
        ';
    } elseif ($user === 'User') {
        echo '
           <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
                        <div class="position-sticky bg-dark vh-100">
                            <div class="pt-3">
                                <hr>
                                <div class="container">
                                    <ul class="nav nav-pills flex-column mb-auto">
                                        <li class="nav-item">
                                            <a href="index.php" class="nav-link ' . ($page === 'Events' ? 'active' : 'text-white') . '" aria-current="page">Events</a>
                                        </li>
                                        <li>
                                            <a href="informations.php" class="nav-link ' . ($page === 'Informations' ? 'active' : 'text-white') . '">Informations</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
        ';
    }
}
?>
