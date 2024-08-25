<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <?php
    // Include the database connection file
    include 'db_connect.php';

    // Check if form data is set
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $password = $_POST['password'];

        // Hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $hashed_password);

        // Execute the query and check if the insertion was successful
        if ($stmt->execute()) {
            echo "<h1>Welcome, " . $name . "!</h1>";
        } else {
            echo "<h1>Error: Could not save your data. Please try again.</h1>";
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "<h1>Welcome, Guest!</h1>";
    }

    // Close the database connection
    $conn->close();
    ?>
</body>
</html>
