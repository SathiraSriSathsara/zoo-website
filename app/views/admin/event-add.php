<?php 
include ("./event.php"); 
session_start();
$msg = '';

if(isset($_POST["btnAdd"])){
    $event = new Event();
    $event->setName($_POST["txtName"]);
    $event->setShortDescription($_POST["txtShortDesc"]);
    $event->setDescription($_POST["txtDesc"]);
    $event->setImage("");
    $id = $event->add();

    if ($id > 0) {
        $info = new SplFileInfo($_FILES["txtImage"]["name"]);
        $imageName = $id . '.' . $info->getExtension(); 
        $newName = '../../../images/event-images/' . $imageName;
        $event->setImage($imageName); 
        $event->setId($id);
        move_uploaded_file($_FILES["txtImage"]["tmp_name"], $newName);
        $event->updateImage(); 
        $msg = "Event added successfully!";
    } else {
        $msg = "Failed to add event.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php $page = 'Events'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <title><?php echo $page; ?> - Admin Panel</title>
</head>

<body>
    <!-- side nav  -->
    <?php
    include '../../../components/sideNav.php';
    $user = 'Admin';
    getNav($user, $page);
    ?>

    <!-- content -->
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">

            <!-- content -->
            <div class="container p-3">
                <h3 class="mb-4"><a href="./index.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Add event</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID</label>
                        <input type="text" name="txtCode" class="form-control" readonly placeholder="Code will be generate automaticaly">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="txtName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Short description</label>
                        <input type="text" name="txtShortDesc" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Description</label>
                        <textarea id="" name="txtDesc" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" name="txtImage" type="file" id="formFile">
                    </div>
                    <input type="submit"  class="btn btn-primary" value="Add" name="btnAdd">
                </form>
            </div>

        </div>
    </main>

    </div>
    </div>
    <?php
        if($msg){
            echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
        }
    ?>
</body>

</html>

