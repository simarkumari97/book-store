<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Edit Category</h1>
    <?php
    include('confs/config.php');
    $id=$_GET['id'];
    $result=mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
    $row=mysqli_fetch_assoc($result);
    ?>
    <form action="cat-update.php"method=post>
        <label for="">
            <input type="hidden" name='id' value="<?php echo $row['id']?>">
        </label>
        <label for="name">Category Name</label>
            <input type="text" name='name' value="<?php echo $row['name'];?>">
        <label for="remark">Remark</label>
            <textarea name="remark" id="" cols="22" rows="10">
                <?php echo $row['remark']?>
            </textarea><br>
        <input type="Submit" value="Update Category">
    </form>
</body>
</html>