<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $stmt = $conn->prepare("INSERT INTO users (name,email,phone,age,city) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $email, $phone, $age, $city);
    if ($stmt->execute()) {
        header("Location: VIEW.php?msg=added");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Add New User</title>
<style>
body { font-family: Arial; }
form { width: 400px; margin: auto; }
input, select { display: block; margin: 10px 0; width: 100%; padding: 8px; }
</style>
</head>
<body>
<h2>Add New User</h2>
<form action="" method="post">
Name:<input type="text" name="name" required>
Email:<input type="email" name="email" required>
Phone:<input type="text" name="phone" required>
Age:<input type="number" name="age" required>
City:<input type="text" name="city" required>
<input type="submit" value="Add User">
</form>
<p><a href="VIEW.php">View All Users</a></p>
</body>
</html>