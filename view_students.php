<?php
include 'db.php';
$result = mysqli_query($conn, "SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Results</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Subject</th>
        <th>Marks</th>
        <th>Action</th>
    </tr>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?= $row['id']; ?></td>
    <td><?= $row['name']; ?></td>
    <td><?= $row['roll']; ?></td>
    <td><?= $row['subject']; ?></td>
    <td><?= $row['marks']; ?></td>
    <td>
        <a href="delete_student.php?id=<?= $row['id']; ?>">Delete</a>
    </td>
</tr>
<?php } ?>

</table>

<br>
<a href="index.php">Back to Home</a>

</body>
</html>