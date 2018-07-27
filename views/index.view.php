<?php require 'partials/head.php'; ?>

	<?php foreach ($users as $user) : ?>
		<li><?= $user->name; ?></li>
	<?php endforeach; ?>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">
        <input type="text" name="name">

        <button type="Submit">Submit</button>
    </form>

<?php require 'partials/footer.php'; ?>