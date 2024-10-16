<body>
    <header>
        <h1>Welcome to Your Website</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
    <section>
        <p>This is your home page content.</p>
        <?php
            $current_date = date("Y-m-d");
            echo "<p>Today's date is $current_date</p>";
        ?>
    </section>
    <form action="process_contact.php" method="post">
    <label for="name">Your Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Your Message:</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Submit</button>
</form>

    <footer>
        <p>&copy; 2023 Your Website</p>
    </footer>
</body>
</html>