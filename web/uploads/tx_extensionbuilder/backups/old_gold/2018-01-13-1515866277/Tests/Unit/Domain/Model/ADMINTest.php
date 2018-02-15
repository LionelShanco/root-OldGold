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
    public function getUsersReturnsInitialValueForUSER()
    {
        self::assertEquals(
            null,
            $this->subject->getUsers()
        );
    }

    /**
     * @test
     */
    public function setUsersForUSERSetsUsers()
    {
        $usersFixture = new \Newsiteindie\OldGold\Domain\Model\USER();
        $this->subject->setUsers($usersFixture);

        self::assertAttributeEquals(
            $usersFixture,
            'users',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLoginReturnsInitialValueForLOGIN()
    {
        self::assertEquals(
            null,
            $this->subject->getLogin()
        );
    }

    /**
     * @test
     */
    public function setLoginForLOGINSetsLogin()
    {
        $loginFixture = new \Newsiteindie\OldGold\Domain\Model\LOGIN();
        $this->subject->setLogin($loginFixture);

        self::assertAttributeEquals(
            $loginFixture,
            'login',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCategoriesReturnsInitialValueForCATEGORIES()
    {
        self::assertEquals(
            null,
            $this->subject->getCategories()
        );
    }

    /**
     * @test
     */
    public function setCategoriesForCATEGORIESSetsCategories()
    {
        $categoriesFixture = new \Newsiteindie\OldGold\Domain\Model\CATEGORIES();
        $this->subject->setCategories($categoriesFixture);

        self::assertAttributeEquals(
            $categoriesFixture,
            'categories',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForRATING()
    {
        self::assertEquals(
            null,
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForRATINGSetsRating()
    {
        $ratingFixture = new \Newsiteindie\OldGold\Domain\Model\RATING();
        $this->subject->setRating($ratingFixture);

        self::assertAttributeEquals(
            $ratingFixture,
            'rating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getServiceadsReturnsInitialValueForSERVICEADDs()
    {
        self::assertEquals(
            null,
            $this->subject->getServiceads()
        );
    }

    /**
     * @test
     */
    public function setServiceadsForSERVICEADDsSetsServiceads()
    {
        $serviceadsFixture = new \Newsiteindie\OldGold\Domain\Model\SERVICEADDs();
        $this->subject->setServiceads($serviceadsFixture);

        self::assertAttributeEquals(
            $serviceadsFixture,
            'serviceads',
            $this->subject
        );
    }
}
