<?php
include("./event.php");
$page = 'Events'; 
session_start();
$msg = '';
$selectedEvent = null;

if (isset($_POST["btnEdit"])) {
    $eventId = $_POST["btnEdit"];
    $event = new Event();
    $eventDetails = $event->getById($eventId); 
    if ($eventDetails) {
        $selectedEvent = $eventDetails;
    } else {
        $msg = "Event not found.";
    }
}

if (isset($_POST["btnUpdate"])) {
    $event = new Event();
    $event->setId($_POST["txtId"]);
    $event->setName($_POST["txtName"]);
    $event->setShortDescription($_POST["txtShortDesc"]);
    $event->setDescription($_POST["txtDesc"]);

    $event->update(); 
    $msg = "Event updated successfully!";

    if ($_FILES['txtImage']['size'] != 0) {
        $info = new SplFileInfo($_FILES["txtImage"]["name"]);
        $imageName = $_POST["txtId"] . '.' . $info->getExtension(); 
        $newName = '../../../images/event-images/' . $imageName;
        $event->setImage($imageName); 
        move_uploaded_file($_FILES["txtImage"]["tmp_name"], $newName);
        $event->updateImage(); 
        $msg .= " Image updated successfully!";
    }
}

if (isset($_POST["btnDel"])) {
    $event = new Event();
    $event->setId($_POST["txtId"]);
    $event->del(); 
    $msg = "Event deleted successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Event</title>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
</head>

<body>
    <!-- side nav  -->
    <?php
    include '../../../components/sideNav.php';
    $user = 'Admin';
    getNav($user, $page);
    ?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="pt-3">
            <div class="container p-3">
                <h3 class="mb-4"><a href="./index.php"><img src="../../../images/icons/back.png" alt="" width="22px"></a> Update Event</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="eventId" class="form-label">ID</label>
                        <input type="number" name="txtId" class="form-control" readonly value="<?php
                                                                                                if ($selectedEvent) {
                                                                                                    echo htmlspecialchars($selectedEvent->getId());
                                                                                                }
                                                                                                ?>">
                    </div>
                    <div class="mb-3">
                        <label for="eventName" class="form-label">Name</label>
                        <input type="text" name="txtName" class="form-control" value="<?php
                                                                                        if ($selectedEvent) {
                                                                                            echo htmlspecialchars($selectedEvent->getName());
                                                                                        }
                                                                                        ?>">
                    </div>
                    <div class="mb-3">
                        <label for="eventShortDesc" class="form-label">Short Description</label>
                        <input type="text" name="txtShortDesc" class="form-control" value="<?php
                                                                                            if ($selectedEvent) {
                                                                                                echo htmlspecialchars($selectedEvent->getShortDescription());
                                                                                            }
                                                                                            ?>">
                    </div>
                    <div class="mb-3">
                        <label for="eventDesc" class="form-label">Description</label>
                        <textarea id="eventDesc" name="txtDesc" class="form-control"><?php
                                                                                        if ($selectedEvent) {
                                                                                            echo htmlspecialchars($selectedEvent->getDescription());
                                                                                        }
                                                                                        ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="eventImage" class="form-label">Image</label>
                        <?php if ($selectedEvent): ?>
                            <img src="../../../images/event-images/<?php echo htmlspecialchars($selectedEvent->getImage()); ?>" alt="event-image" width="100px">
                        <?php endif; ?>
                        <br>
                        <br>
                        <input class="form-control" name="txtImage" type="file" id="eventImage">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Update" name="btnUpdate">
                    <input type="submit" class="btn btn-danger" value="Delete" name="btnDel">
                </form>
            </div>
        </div>
    </main>
    <?php
    if ($msg) {
        echo '<div class="alert alert-success" role="alert">' . $msg . '</div>';
    }
    ?>
</body>

</html>