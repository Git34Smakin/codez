<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RSVP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>RSVP</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="guestbook.php">Guestbook</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="rsvp.php">RSVP</a></li>
        </ul>
    </nav>
    <main>
        <h2>Confirm Your Attendance</h2>
        <form action="rsvp.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            echo "<h3>RSVP Confirmation</h3>";
            echo "<p>Thank you, $name! We have received your RSVP at $email.</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 [Your Name]</p>
    </footer>
</body>
</html>
