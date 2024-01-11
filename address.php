<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Delivery Address</title>
</head>
<body>
    <h1>Update Delivery Address</h1>
    <form action="update_address.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br><br>
        <label for="city">City:</label>
        <input type="text" name="city" required><br><br>
        <label for="state">State:</label>
        <input type="text" name="state" required><br><br>
        <label for="zip">Zip Code:</label>
        <input type="text" name="zip" required><br><br>
        <input type="submit" value="Update Address">
    </form>
</body>
</html>
