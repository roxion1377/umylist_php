<?php
App::uses('Mylist', 'Model');

/**
 * Mylist Test Case
 *
 */
class MylistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.mylist',
		'app.movie'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Mylist = ClassRegistry::init('Mylist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Mylist);

		parent::tearDown();
	}

}
