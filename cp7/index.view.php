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
        <h1>Person</h1>
    </header>
    <ul>
        <?php foreach($person as $info => $value) : ?>
            <li> <strong><?= $info ?></strong> <?= $value ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
