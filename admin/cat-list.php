<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category-List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Categories List</h1>
    <h3 class="menu">
        <a href="cat-add.php">Add New Category</a>&nbsp;/
        <a href="book-list.php">Manage Book</a>&nbsp;/
        <a href="order.php">Manage Order</a>&nbsp;/
        <a href="logout.php">Logout</a>
    </h3>
    <?php
    include('confs/config.php');
    $result=mysqli_query($conn,"SELECT * FROM categories");
    ?>
    <table width="80%" border="1px" align="center">
        <th>Categories Name</th>
        <th>Remark</th>
        <th>Edit</th>
        <th>Delete</th>
        <?php while($row=mysqli_fetch_assoc($result)):
        ?>
        <tr>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['remark']?></td>
            <td class='edit'><a href="cat-edit.php?id=<?php echo $row['id']?>">Edit</a></td>
            <td class='del'><a href="cat-del.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
        <?php endwhile ?>
    </table>
</body>
</html>