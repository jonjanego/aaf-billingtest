<?php
// SQL Injection — user input concatenated directly into query
echo "Line 3!\n";
echo "Line 4!\n";
echo "Line 5!\n";
$username = $_GET['username'];
$query = "SELECT * FROM users WHERE username = '" . $username . "'";
$result = mysqli_query($conn, $query);
echo "Hello, Console!\n";
?>
