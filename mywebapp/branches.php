<!DOCTYPE html>
<html>
<head>
  <title>DreamHome Branches</title>
  <style>
    body { font-family: Arial; background-color: #f0f0f0; }
    h2 { color: #333; text-align: center; }
    table { width: 70%; margin: auto; border-collapse: collapse; background-color: #fff; }
    th, td { padding: 12px; border: 1px solid #ccc; text-align: center; }
    th { background-color: #0066cc; color: white; }
  </style>
</head>
<body>

<h2>DreamHome Branch List</h2>

<?php
include 'connect.php';

$sql = "SELECT * FROM branch";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>Branch No</th><th>Street</th><th>City</th><th>Postcode</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["branchNo"]."</td><td>".$row["street"]."</td><td>".$row["city"]."</td><td>".$row["postcode"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "<p style='text-align:center;'>No branches found.</p>";
}

$conn->close();
?>

</body>
</html>
