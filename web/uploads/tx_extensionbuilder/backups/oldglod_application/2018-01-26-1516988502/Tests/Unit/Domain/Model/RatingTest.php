<?php
namespace OldGlod\OldglodApplication\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class RatingTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \OldGlod\OldglodApplication\Domain\Model\Rating
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \OldGlod\OldglodApplication\Domain\Model\Rating();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForIntSetsRating()
    {
        $this->subject->setRating(12);

        self::assertAttributeEquals(
            12,
            'rating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }
}
