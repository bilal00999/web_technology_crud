<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Users</title>
<style>
body { font-family: Arial; }
table { border-collapse: collapse; width: 100%; max-width: 800px; margin:auto; }
th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
th { background-color: #f2f2f2; }
a.button { padding: 5px 10px; background:#4285f4; color:#fff; text-decoration:none; border-radius:3px; }
a.button.delete { background:#e74c3c; }
</style>
</head>
<body>
<?php
if(isset($_GET['msg'])){
    $m = $_GET['msg'];
    if($m == 'deleted') echo "<script>alert('Record deleted successfully');</script>";
    if($m == 'updated') echo "<script>alert('Record updated successfully');</script>";
    if($m == 'added') echo "<script>alert('Record added successfully');</script>";
}
?>
<h2 style="text-align:center;">Users</h2>
<p style="text-align:center;"><a class="button" href="INDEX.php">Add New User</a></p>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Age</th>
<th>City</th>
<th>Actions</th>
</tr>
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". $row['id'] ."</td>";
        echo "<td>". $row['name'] ."</td>";
        echo "<td>". $row['email'] ."</td>";
        echo "<td>". $row['phone'] ."</td>";
        echo "<td>". $row['age'] ."</td>";
        echo "<td>". $row['city'] ."</td>";
        echo "<td><a class='button' href='EDIT.php?id=".$row['id']."'>Edit</a> <a class='button delete' href='DELETE.php?id=".$row['id']."' onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='7'>No users found</td></tr>";
}
?>
</table>
</body>
</html>