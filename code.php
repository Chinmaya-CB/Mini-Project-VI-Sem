<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_item']))
{
    $item_id = mysqli_real_escape_string($con, $_POST['delete_item']);

    $query = "DELETE FROM items WHERE id='$item_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Item Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Item Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_item']))
{
    $item_id = mysqli_real_escape_string($con, $_POST['item_id']);

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $ids = mysqli_real_escape_string($con, $_POST['ids']);

    $query = "UPDATE items SET name='$name', price='$price', quantity='$quantity', ids='$ids' WHERE id='$item_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Item Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Item Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_item']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);
    $ids = mysqli_real_escape_string($con, $_POST['ids']);

    $query = "INSERT INTO items (name,price,quantity,ids) VALUES ('$name','$price','$quantity','$ids')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Item Created Successfully";
        header("Location: item-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Item Not Created";
        header("Location: item-create.php");
        exit(0);
    }
}

?>