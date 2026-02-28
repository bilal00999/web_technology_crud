<?php
include 'db.php';
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $city = $_POST['city'];

    $stmt = $conn->prepare("UPDATE users SET name=?, email=?, phone=?, age=?, city=? WHERE id=?");
    $stmt->bind_param("sssisi", $name, $email, $phone, $age, $city, $id);
    if ($stmt->execute()) {
        header("Location: VIEW.php?msg=updated");
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    $result = $conn->query("SELECT * FROM users WHERE id=$id");
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "User not found";
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit User</title>
<style>
body { font-family: Arial; }
form { width: 400px; margin: auto; }
input, select { display: block; margin: 10px 0; width: 100%; padding: 8px; }
</style>
</head>
<body>
<h2 style="text-align:center;">Edit User</h2>
<form action="" method="post">
Name:<input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>
Email:<input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required>
Phone:<input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required>
Age:<input type="number" name="age" value="<?php echo htmlspecialchars($row['age']); ?>" required>
City:<input type="text" name="city" value="<?php echo htmlspecialchars($row['city']); ?>" required>
<input type="submit" value="Update User">
</form>
<p style="text-align:center;"><a href="VIEW.php">Back to list</a></p>
</body>
</html>