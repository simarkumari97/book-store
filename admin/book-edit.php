<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add book</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit BOOK</h1>
    <?php
    include('confs/config.php');
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * FROM books WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
    ?>
    <form action="book-update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="" value="<?php echo $row['id']?>">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php echo $row['title']?>">

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?php echo $row['author']?>">

        <label for="summary">Summary</label>
        <input type="text" name="summary" id="summary" value="<?php echo $row['summary']?>">

        <label for="price">Price</label>
        <input type="text" name="price" id="price" value="<?php echo $row['price']?>">

        <label for="categories">Category</label>
        <select name="category_id" id="categories">
            <?php
            include('confs/config.php');
            $categories=mysqli_query($conn,"SELECT id,name FROM categories");
            while($cat=mysqli_fetch_assoc($categories)):
            ?>
                <option value="<?php echo $cat['id']?>" <?php if($cat['id']==$row['category_id'])echo "selected"?>>
                    <?php echo $cat['name']?>
                </option>
            <?php endwhile ?>
        </select><br><br>
        
        <img src="covers/<?php echo $row['cover']?>" alt="" height="100px" width="100px">
        <label for="cover">Change Cover</label>
        <input type="File" name="cover" id="cover" ><br><br>

        <input type="Submit" value="Update Book">
        <a href="book-list.php"><input type="button" value="View Book List"></a>
    </form>
</body>
</html>