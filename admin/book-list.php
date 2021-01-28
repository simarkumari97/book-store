<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .summary{
            max-width: 200px;
            overflow: auto;
        }
        .img{
           text-align: center;
        }
    </style>
</head>
<body>
    <h1>Book List</h1>
    <h3 class="menu">
        <a href="book-new.php">Add New Book </a> &nbsp;/
        <a href="cat-list.php">Manage Category</a> &nbsp;/
        <a href="order.php">Manage Orders</a> &nbsp;/
        <a href="logout.php">Logout</a>
    </h3>
    <?php
        include('confs/config.php');
        $result=mysqli_query($conn,"SELECT books.*,categories.name
                                    FROM books LEFT JOIN categories
                                    ON books.category_id=categories.id
                                    ORDER BY books.created_date DESC");

    
    ?>
    <table width="100%" border="1px solid">
        <th>Title</th>
        <th>Author</th>
        <th>Summary</th>
        <th>Price</th>
        <th>Category</th>
        <th>Cover</th>
        <th>Edit</th>
        <th>Delete</th>
        <?php
            while($row=mysqli_fetch_assoc($result)):
        ?>
        <tr> 
            <td><?php echo $row['title']?></td>
            <td><i><?php echo $row['author']?></i></td>
            <td class=summary><?php echo $row['summary']?></td>
            <td>$<?php echo $row['price']?></td>
            <td><?php echo $row['name']?></td>
            <td class="img"><img src="covers/<?php echo $row['cover']?>" alt="" width="90px;" height='110px' ></td>
            <td class='edit'> <a href="book-edit.php?id=<?php echo $row['id']?>">Edit</a></td>
            <td class='del'> <a href="book-del.php?id=<?php echo $row['id']?>">Delete</a></td>
        </tr>
        <?php endwhile?>
    </table>

</body>
</html>