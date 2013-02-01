<?php
/*
 * Created on 2013-02-01
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

$title="Create Your Items";
include('view/header.html.php');



?>
	<form action="" method="post">
		<label for="itemname">Item Name: </label><input type="text"
			name="itemname" id="itemname">
			<?php echo $newitemname ?>
		</input><br /> <label for="itemdescription">Item Description: </label><input
			type="text" name="itemdescription" id="itemdescription">
			<?php echo $newitemdescription ?>
		</input><br /> <input type="hidden" name="action" value="createitem" />
		<input type="submit" value="Create Role" />
	</form>

<?php

include('view/footer.html.php');

?>