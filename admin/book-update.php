<?php
include('confs/config.php');
$id=$_POST['id'];
$title=$_POST['title'];
$author=$_POST['author'];
$summary=$_POST['summary'];
$price=$_POST['price'];
$category_id=$_POST['category_id'];
 
$cover=$_FILES['cover']['name'];
$tmp=$_FILES['cover']['tmp_name'];

if($cover){
    move_uploaded_file($tmp,'covers/$cover');
        $result=mysqli_query($conn,"UPDATE books SET title='$title',author='$author',summary='$summary',
        price='$price',category_id='$category_id',cover='$cover',created_date=now(),modified_date=now() WHERE id=$id");
}else{
    $result=mysqli_query($conn,"UPDATE books SET title='$title',author='$author',summary='$summary',
        price='$price',category_id='$category_id',created_date=now(),modified_date=now() WHERE id=$id");
}
header('location:book-list.php');