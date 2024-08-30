<!DOCTYPE html>
<html lang="en">

<?php $page = 'Contact'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
    <title><?php echo $page ?></title>
</head>

<body>
    <!-- header  -->
    <?php
    $page = 'Contact';
    include './components/header.php'

    ?>
    <!-- Breadcrumb  -->
    <?php
    include './components/Breadcrumb.php'
    ?>
    <!-- page content -->
    <div class="container px-4 py-5">

        <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
            <div class="col d-flex flex-column align-items-start gap-2">
                <h2 class="fw-bold text-body-emphasis">Where wild wonders comes to life!</h2>
                <p class="text-body-secondary">We’d love to hear from you! Whether you have questions about our exhibits, want to learn more about our conservation efforts, or need assistance with your visit, our team is here to help. Reach out to us via phone, email, or by visiting us at our address. We’re committed to providing you with exceptional service and ensuring your experience at Zoo Parc is unforgettable. Feel free to contact us, and we’ll get back to you as soon as possible.</p>
            </div>

            <div class="col">
                <div class="row row-cols-1 row-cols-sm-2 g-4">
                    <div class="col d-flex flex-column gap-2">
                        <div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-4 rounded-3">
                        </div>
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Location</h4>
                        <p class="text-body-secondary">123 Safari Lane, Zoo Parc, Green Valley, GV 45678</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Contact number</h4>
                        <p class="text-body-secondary">(+94) 768394256</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Email</h4>
                        <p class="text-body-secondary">zooparc@gmail.com</p>
                    </div>

                    <div class="col d-flex flex-column gap-2">
                        <h4 class="fw-semibold mb-0 text-body-emphasis">Whatsapp</h4>
                        <p class="text-body-secondary">(+94) 768394256</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
    include './components/footer.php'
    ?>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>