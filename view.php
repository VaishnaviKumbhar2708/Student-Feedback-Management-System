<?php
$conn = new mysqli("localhost", "vaishu", "Vaishu@12345", "feedback_db");
$result = $conn->query("SELECT * FROM feedback");
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #f2f4f8;
}

.card {
    margin: 15px 0;
}
</style>
</head>

<body class="container">

<h2 class="text-center mt-4">📊 Student Feedback Dashboard</h2>

<p class="text-center text-muted">
All student feedback collected from the system
</p>

<div class="row">

<?php while($row = $result->fetch_assoc()) { ?>

<div class="col-md-4">

<div class="card shadow p-3">

<h5>👤 <?php echo $row['name']; ?></h5>
<p>📧 <?php echo $row['email']; ?></p>
<p>💬 <?php echo $row['message']; ?></p>

</div>

</div>

<?php } ?>

</div>

</body>
</html>
