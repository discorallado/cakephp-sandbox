<?php

namespace Sandbox\Test\TestCase\Controller;

use Shim\TestSuite\IntegrationTestCase;

/**
 * App\Controller\SocialShareController Test Case
 *
 * @uses \Sandbox\Controller\SocialShareController
 */
class SocialShareControllerTest extends IntegrationTestCase {

	/**
	 * @return void
	 */
	public function testIndex() {
		$this->skipIf(true, 'FIXME');

		$this->get(['plugin' => 'Sandbox', 'controller' => 'SocialShare', 'action' => 'index']);

		$this->assertResponseCode(200);
		$this->assertNoRedirect();
	}

}
