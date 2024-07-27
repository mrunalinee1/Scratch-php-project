<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect value from the form
        $name = htmlspecialchars($_POST['name']);
        echo "<h2>Hello, $name!</h2>";
    }
    ?>
     <!-- HTML Form -->
     <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="Submit">
    </form>
</body>
</html>