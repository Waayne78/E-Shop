<?php
include '../partials/header.php';


?>

<h1>Contact Page</h1><br>
<form class="contact-form" method="POST">
    <input type="email" id="email" name="email" placeholder="Votre mail ici..." required><br>

    <input type="text" id="name" name="name" placeholder="le sujet de votre mail" required><br>


    <textarea id="message" name="message" required></textarea><br><br>

    <input type="submit" value="Submit">
</form>

<?php include '../partials/footer.php' ?>