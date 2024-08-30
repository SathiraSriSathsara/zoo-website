<!DOCTYPE html>
<html lang="en">
<?php $page = 'Admins'; ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/main.css">
    <link rel="icon" type="image/x-icon" href="./images/icons/zooparc-favicon-green.png">
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

            <h3 class="mb-4">
                <a href="./index.php">
                    <img src="../../../images/icons/back.png" alt="" width="22px">
                </a> Admins
            </h3>

            <div class="d-flex flex-row-reverse">
                <div class="p-2"> <a href="./admin-add.php"><button type="button" class="btn btn-primary"><img src="../../../images/icons/add.png" alt="" width="22px"> Add new admin</button></a></div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once './admin.php'; 

                    $adminObj = new Admin(); 
                    $admins = $adminObj->get(); 

                    foreach ($admins as $index => $admin) { 
                        echo '<tr>';
                        echo '<th scope="row">' . ($index + 1) . '</th>';
                        echo '<td>' . htmlspecialchars($admin->getFirstName()) . '</td>';
                        echo '<td>' . htmlspecialchars($admin->getLastName()) . '</td>';
                        echo '<td>' . htmlspecialchars($admin->getEmail()) . '</td>';
                        echo '<td>
                            <button type="button" class="btn btn-secondary" onclick="editAdmin(' . $admin->getId() . ')">
                                <img src="../../../images/icons/edit.png" alt="" width="22px">
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deleteAdmin(' . $admin->getId() . ')">
                                <img src="../../../images/icons/delete.png" alt="" width="22px">
                            </button>
                          </td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </main>

    <script>
        function editAdmin(adminId) {
            window.location.href = `admin-update.php?id=${adminId}`;
        }

        function deleteAdmin(adminId) {
            if (confirm('Are you sure you want to delete this admin?')) {
                window.location.href = `admin-delete.php?id=${adminId}`;
            }
        }
    </script>

</body>

</html>
