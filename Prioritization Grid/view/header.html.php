<?php
/*
 * Created on 2013-02-01
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo "$title"; ?></title>
</head>
<body>

	<h1><?php echo "$title"; ?></h1>

	<?php if (isset($errors)): ?>
		<p>An error has occurred:</p>
		<ul>
		<?php
		foreach ($errors as $error) {
			echo '<li class="error">' . $error . "</li>i\n";
		}
		?>
		</ul>
	<?php endif; ?>

