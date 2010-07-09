<?php
/* Study Test cases generated on: 2010-05-26 22:05:33 : 1274881293*/
App::import('Model', 'Study');

class StudyTestCase extends CakeTestCase {
	var $fixtures = array('app.study');

	function startTest() {
		$this->Study =& ClassRegistry::init('Study');
	}

	function endTest() {
		unset($this->Study);
		ClassRegistry::flush();
	}

}
?>