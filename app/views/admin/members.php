<!DOCTYPE html>
<html lang="en">
<?php $page = 'Members'; ?>

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

            <h3 class="mb-4">
                <a href="./index.php">
                    <img src="../../../images/icons/back.png" alt="" width="22px">
                </a> Members
            </h3>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once './user.php'; // Include the user class

                    $userObj = new User(); // Create an instance of the User class
                    $users = $userObj->get(); // Retrieve the users

                    foreach ($users as $index => $user) { // Loop through each user
                        echo '<tr>';
                        echo '<th scope="row">' . ($index + 1) . '</th>';
                        echo '<td>' . htmlspecialchars($user->getFirstName()) . '</td>';
                        echo '<td>' . htmlspecialchars($user->getLastName()) . '</td>';
                        echo '<td>' . htmlspecialchars($user->getEmail()) . '</td>';
                        echo '<td>
                            <button type="button" class="btn btn-secondary" onclick="editUser(' . $user->getId() . ')">
                                <img src="../../../images/icons/edit.png" alt="" width="22px">
                            </button>
                            <button type="button" class="btn btn-danger" onclick="deleteUser(' . $user->getId() . ')">
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
        function editUser(userId) {
            // Implement your edit functionality here, such as redirecting to an edit page
            window.location.href = `user-update.php?id=${userId}`;
        }

        function deleteUser(userId) {
            // Implement your delete functionality here, such as calling a PHP script to delete the user
            if (confirm('Are you sure you want to delete this user?')) {
                window.location.href = `user-delete.php?id=${userId}`;
            }
        }
    </script>

</body>

</html>
