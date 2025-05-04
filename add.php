<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Add Student</h2>

    <form method="POST" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Course: <input type="text" name="course" required><br><br>

        <input type="submit" name="submit" value="Save">
    </form>

    <br>
    <a href="index.php">Back to List</a>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];

        $query = "INSERT INTO students (name, email, course) VALUES ('$name', '$email', '$course')";
        if (mysqli_query($conn, $query)) {
            echo "<p>Student added successfully!</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conn) . "</p>";
        }
    }
    ?>

</body>
</html>
