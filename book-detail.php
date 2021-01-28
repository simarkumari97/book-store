<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Detail</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include('admin/confs/config.php');
        $id=$_GET['id'];
        $book=mysqli_query($conn,"SELECT * FROM books WHERE id=$id");
        $row=mysqli_fetch_assoc($book);
    ?>
    <h1>Book Detail</h1>
    <div class="detail"> 
        <a href="index.php" class="back">&laquo; Go Back</a> 
        <img src="admin/covers/<?php echo $row['cover']?>" alt="" width="200px" height="220px">
        <h2><?php echo $row['title']?></h2>
        <i><?php echo $row['author']?></i>,
        <b> $<?php echo $row['price']?></b>
        <p><?php echo $row['summary']?></p>
        <a href="add-to-cart.php?id=<?php echo $row['id']?>" class="add-to-cart">Add to cart</a>
    </div>
        
    <div class="footer">  &copy; <?php echo date("Y") ?>. All right reserved. </div>
</body>
</html>