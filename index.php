<?php include 'db.php'; ?>
<html>
<head>
<title>Insert Student</title>
<style>
body { font-family: Arial; }
form { width: 300px; margin: auto; }
input { display: block; margin: 10px 0; }
</style>
</head>
<body>
<h2>Add Student</h2>
<form action="" method="post">
Name: <input type="text" name="name" required><br>
Roll No: <input type="text" name="roll_no" required><br>
Department: <input type="text" name="department" required><br>
Section: <input type="text" name="section" required><br>
<input type="submit" value="Add">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $department = $_POST['department'];
    $section = $_POST['section'];
    $sql = "INSERT INTO students (name, roll_no, department, section) VALUES ('$name', '$roll_no', '$department', '$section')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
</body>
</html>