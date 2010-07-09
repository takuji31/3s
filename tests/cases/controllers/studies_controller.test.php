<?php
/* Studies Test cases generated on: 2010-05-26 22:05:33 : 1274881053*/
App::import('Controller', 'Studies');

class TestStudiesController extends StudiesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class StudiesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.study');

	function startTest() {
		$this->Studies =& new TestStudiesController();
		$this->Studies->constructClasses();
	}

	function endTest() {
		unset($this->Studies);
		ClassRegistry::flush();
	}

}
?>