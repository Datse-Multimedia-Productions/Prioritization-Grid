<?php
/*
 * Created on 2013-02-01
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */

class Item {
	
	public $name;
	public $description;
	public $score = 0;
	
	public function compare (item $item, $prefered) {
		if ($prefered) {
			$score++
		} else {
			$item->score++;
		}
	}
	
}

?>