<?php require 'partials/head.php'; ?>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">
        <input type="text" name="name">

        <button type="Submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>