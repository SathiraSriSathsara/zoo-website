<main>
    <form method="POST" action="manageEvent.php">
        <table border="1" id="events" class="center">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Short Description</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit</th>
            </tr>
            <?php
            foreach ($events as $event) {
                echo '
                    <tr>
                        <td>' . $event->getId() . '</td>
                        <td>' . $event->getName() . '</td>
                        <td>' . $event->getShortDescription() . '</td>
                        <td>' . $event->getDescription() . '</td>
                        <td><img src="'. $event->getImage() .'" width="100px"></td>
                        <td>
                            <button type="submit" name="btnEdit" value="' . $event->getId() . '">Edit</button>
                        </td>
                    </tr>';
            }
            ?>
        </table>
    </form>
</main>


