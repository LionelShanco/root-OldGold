<?php
namespace HOFUNIVERISTY\OldGold\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class ADMINTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \HOFUNIVERISTY\OldGold\Domain\Model\ADMIN
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \HOFUNIVERISTY\OldGold\Domain\Model\ADMIN();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getId()
        );
    }

    /**
     * @test
     */
    public function setIdForStringSetsId()
    {
        $this->subject->setId('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'id',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getUserName()
        );
    }

    /**
     * @test
     */
    public function setUserNameForStringSetsUserName()
    {
        $this->subject->setUserName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'userName',
            $this->subject
        );
    }
}
