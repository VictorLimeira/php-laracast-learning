<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP learning</title>
	<style>
	header {
		background: #c9c9c9;
		padding: 2em;
		text-align: center;
	}
	</style>
</head>
<body>
    <header>
        <h1>ANIMALS</h1>
    </header>
    <ul>
        <?php foreach($animals as $animal) : ?>
            <li><?= $animal ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
