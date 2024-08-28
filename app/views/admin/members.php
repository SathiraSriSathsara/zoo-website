<!DOCTYPE html>
<html lang="en">
<?php $page = 'Members'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">   
    <link rel="stylesheet" href="../../../css/main.css">
    <title><?php echo $page; ?></title>
</head>

<body>
    <!-- side nav  -->
    <?php 
        include '../../../components/sideNav.php';
        $user = 'Admin';
        getNav($user,$page);
    ?>

    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            content
        </div>
    </main>
    
    <!-- Closing tags for div and other opened elements -->
    </div>
    </div>
</body>

</html>
