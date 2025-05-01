<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM students WHERE id=$id";

    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
