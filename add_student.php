<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO students (name, roll, subject, marks)
            VALUES ('$name', '$roll', '$subject', '$marks')";

    mysqli_query($conn, $sql);
    header("Location: view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Student Result</h2>

<form method="post">
    <input type="text" name="name" placeholder="Student Name" required><br>
    <input type="text" name="roll" placeholder="Roll Number" required><br>
    <input type="text" name="subject" placeholder="Subject" required><br>
    <input type="number" name="marks" placeholder="Marks" required><br>
    <button type="submit" name="submit">Save</button>
</form>

</body>
</html>