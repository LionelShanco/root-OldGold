<?php
namespace OldGlod\OldglodApplication\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class AdTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \OldGlod\OldglodApplication\Domain\Model\Ad
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \OldGlod\OldglodApplication\Domain\Model\Ad();
    }

    protected function tearDown()
    {
        parent::tearDown();
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
    public function getCategoryReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForIntSetsCategory()
    {
        $this->subject->setCategory(12);

        self::assertAttributeEquals(
            12,
            'category',
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

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForStringSetsLocation()
    {
        $this->subject->setLocation('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhoneReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhone()
        );
    }

    /**
     * @test
     */
    public function setPhoneForStringSetsPhone()
    {
        $this->subject->setPhone('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUser()
        );
    }

    /**
     * @test
     */
    public function setUserForIntSetsUser()
    {
        $this->subject->setUser(12);

        self::assertAttributeEquals(
            12,
            'user',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForRating()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForObjectStorageContainingRatingSetsRating()
    {
        $rating = new \OldGlod\OldglodApplication\Domain\Model\Rating();
        $objectStorageHoldingExactlyOneRating = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRating->attach($rating);
        $this->subject->setRating($objectStorageHoldingExactlyOneRating);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRating,
            'rating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addRatingToObjectStorageHoldingRating()
    {
        $rating = new \OldGlod\OldglodApplication\Domain\Model\Rating();
        $ratingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ratingObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($rating));
        $this->inject($this->subject, 'rating', $ratingObjectStorageMock);

        $this->subject->addRating($rating);
    }

    /**
     * @test
     */
    public function removeRatingFromObjectStorageHoldingRating()
    {
        $rating = new \OldGlod\OldglodApplication\Domain\Model\Rating();
        $ratingObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $ratingObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($rating));
        $this->inject($this->subject, 'rating', $ratingObjectStorageMock);

        $this->subject->removeRating($rating);
    }
}
