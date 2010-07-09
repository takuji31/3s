<?php
/* Slide Test cases generated on: 2010-05-26 22:05:18 : 1274881278*/
App::import('Model', 'Slide');

class SlideTestCase extends CakeTestCase {
	var $fixtures = array('app.slide', 'app.study');

	function startTest() {
		$this->Slide =& ClassRegistry::init('Slide');
	}

	function endTest() {
		unset($this->Slide);
		ClassRegistry::flush();
	}

}
?>