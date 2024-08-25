<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="firstpage.css">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>First page</title>
</head>
<body>
    <?php
    echo "hiii";
    ?>
<form action="welcome.php" method="post">
    <label for="Name">Enter your name:</label>
     <input type="text" id="Name" name="name" required>
     <br>
     <label for="password">Enter your password:</label>
     <input type="password" id="password" name="password" required>
     <br>
     <input type="submit" value="Submit">
</form>

</body>
</html>