<?php
namespace Newsiteindie\OldGold\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ADMINTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Newsiteindie\OldGold\Domain\Model\ADMIN
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Newsiteindie\OldGold\Domain\Model\ADMIN();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function dummyTestToNotLeaveThisFileEmpty()
    {
        self::markTestIncomplete();
    }
}
