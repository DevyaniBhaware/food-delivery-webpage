<?php
echo "hello world";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $delivered = isset($_POST['delivered']) ? 'Yes' : 'No';
    $query = htmlspecialchars($_POST['query']);

    echo "<h2>Your Input:</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "Phone: $phone<br>";
    echo "Delivered before: $delivered<br>";
    echo "Query: $query<br>";
} else {
    echo "Invalid Request!";
}
?>
