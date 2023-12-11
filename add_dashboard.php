<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Project</title>
    <link rel="stylesheet" href="homepage.css">

</head>
<body>
    <header>
        <h1>Final Project</h1>
    </header>

    <section>
        <h2>Propety Registration</h2>
        <form action="process_add_dashboard.php" method="post">
            <!-- Form fields for user registration -->
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="size">Size:</label>
            <input type="text" id="size" name="size" required>

            <label for="garden">Garden:</label>
            <select id="garden" name="garden" required>
                <option value="large">Large</option>
                <option value="medium">Medium</option>
                <option value="small">Small</option>
                <option value="no">No garden</option>
            </select>

            <label for="garage">Garage:</label>
            <select id="garage" name="garage" required>
                <option value="1">1 Car</option>
                <option value="2">2 Car</option>
                <option value="3">3 Car</option>
                <option value="3+">3+ Car</option>
                <option value="no">No garage</option>
            </select>
            <label for="tax">Property Tax:</label>
            <input type="text" id="tax" name="tax" required>

            <button type="submit">Register</button>
        </form>
    </section>
    
</body>
</html>
