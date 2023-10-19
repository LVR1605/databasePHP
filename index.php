<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <h3>Users</h3>
        <p>
            <?php
            if (isset($_GET['save-success'])) {
                echo "Successfully saved";
                }
            ?>
        </p> 
        <div>
            <a href="user/create.php">Add User</a>
        </div>
    </div> 
        <table>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                require('php/user/users.php');
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td>
                            <?php echo $row['first_name']; ?> 
                            <?php echo $row['last_name']; ?>
                        </td>
                        <td class="capitalize"><?php echo $row['gender']; ?></td> 
                        <td>
                            <!-- user/edit.php?id=<?php echo $row['id']; ?> -->
                            <a href="">
                                Edit
                            </a>
                            <!-- die("Connection failed: ".$conn->connect_error); -->
                            <a href="">
                                Delete
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>