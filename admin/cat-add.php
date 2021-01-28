<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-Category</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>New Categories</h1>
    <form action="cat-new.php" method="post">
        <label for="name">Category Name</label>
        <input type="text" id="name" name="name">
        <label for="remark">Remark</label>
        <textarea name="remark" id="remark" cols="22" rows="10"></textarea><br><br>
        <input type="submit" value="Add Category">
    </form>
</body>
</html>