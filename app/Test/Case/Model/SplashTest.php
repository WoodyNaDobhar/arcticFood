<?php
App::uses('Splash', 'Model');

/**
 * Splash Test Case
 *
 */
class SplashTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.splash'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Splash = ClassRegistry::init('Splash');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Splash);

		parent::tearDown();
	}

}
