<?php
/* Study Test cases generated on: 2010-07-09 12:07:47 : 1278647387*/
App::import('Model', 'Study');

class StudyTestCase extends CakeTestCase {
	var $fixtures = array('app.study', 'app.user', 'app.slide');

	function startTest() {
		$this->Study =& ClassRegistry::init('Study');
	}

	function endTest() {
		unset($this->Study);
		ClassRegistry::flush();
	}

}
?>