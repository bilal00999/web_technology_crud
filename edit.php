<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $department = $_POST['department'];
    $section = $_POST['section'];
    $sql = "UPDATE students SET name='$name', roll_no='$roll_no', department='$department', section='$section' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: view.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    $sql = "SELECT * FROM students WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>
<html>
<head>
<title>Edit Student</title>
<style>
body { font-family: Arial; }
form { width: 300px; margin: auto; }
input { display: block; margin: 10px 0; }
</style>
</head>
<body>
<h2>Edit Student</h2>
<form action="" method="post">
Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br>
Roll No: <input type="text" name="roll_no" value="<?php echo $row['roll_no']; ?>" required><br>
Department: <input type="text" name="department" value="<?php echo $row['department']; ?>" required><br>
Section: <input type="text" name="section" value="<?php echo $row['section']; ?>" required><br>
<input type="submit" value="Update">
</form>
</body>
</html>