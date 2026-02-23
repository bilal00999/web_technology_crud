<?php include 'db.php'; ?>
<html>
<head>
<title>View Students</title>
<style>
body { font-family: Arial; }
table { border-collapse: collapse; width: 100%; }
th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
th { background-color: #f2f2f2; }
</style>
</head>
<body>
<h2>Students</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Roll No</th>
<th>Department</th>
<th>Section</th>
<th>Actions</th>
</tr>
<?php
$sql = "SELECT * FROM students";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["roll_no"]. "</td><td>" . $row["department"]. "</td><td>" . $row["section"]. "</td><td><a href='edit.php?id=" . $row["id"] . "'>Edit</a> | <a href='delete.php?id=" . $row["id"] . "'>Delete</a></td></tr>";
    }
} else {
    echo "<tr><td colspan='6'>No students found</td></tr>";
}
?>
</table>
</body>
</html>