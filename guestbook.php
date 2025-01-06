<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guestbook</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Guestbook</h1>
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
        <h2>Leave a Message</h2>
        <form action="guestbook.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>
            <button type="submit">Submit</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $message = htmlspecialchars($_POST['message']);
            echo "<h3>Guestbook Entries</h3>";
            echo "<p><strong>$name:</strong> $message</p>";
        }
        ?>
    </main>
    <footer>
        <p>&copy; 2025 [Your Name]</p>
    </footer>
</body>
</html>
