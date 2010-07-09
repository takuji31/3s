<?php
/* Slides Test cases generated on: 2010-05-26 22:05:50 : 1274881310*/
App::import('Controller', 'Slides');

class TestSlidesController extends SlidesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SlidesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.slide', 'app.study');

	function startTest() {
		$this->Slides =& new TestSlidesController();
		$this->Slides->constructClasses();
	}

	function endTest() {
		unset($this->Slides);
		ClassRegistry::flush();
	}

}
?>