<?php
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $quantity = $_POST["quantity"];

    // Update the quantity in the database
    $sql = "UPDATE items SET quantity = quantity - $quantity WHERE name = '$name'";
    $query = mysqli_query($con, $sql);
    
    if ($query) {
        echo "Quantity updated successfully";
    } else {
        echo "Failed to update quantity";
    }
}
?>

