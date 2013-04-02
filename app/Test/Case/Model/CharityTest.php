<?php
App::uses('Charity', 'Model');

/**
 * Charity Test Case
 *
 */
class CharityTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.charity'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Charity = ClassRegistry::init('Charity');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Charity);

		parent::tearDown();
	}

}
