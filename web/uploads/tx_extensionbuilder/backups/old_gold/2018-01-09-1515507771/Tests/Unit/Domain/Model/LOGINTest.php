<?php
namespace Newsiteindie\OldGold\Tests\Unit\Domain\Model;

/**
 * Test case.
 */
class LOGINTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Newsiteindie\OldGold\Domain\Model\LOGIN
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Newsiteindie\OldGold\Domain\Model\LOGIN();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueFor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getUser()
        );
    }

    /**
     * @test
     */
    public function setUserForObjectStorageContainingSetsUser()
    {
        $user = new ();
        $objectStorageHoldingExactlyOneUser = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneUser->attach($user);
        $this->subject->setUser($objectStorageHoldingExactlyOneUser);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneUser,
            'user',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addUserToObjectStorageHoldingUser()
    {
        $user = new ();
        $userObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $userObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($user));
        $this->inject($this->subject, 'user', $userObjectStorageMock);

        $this->subject->addUser($user);
    }

    /**
     * @test
     */
    public function removeUserFromObjectStorageHoldingUser()
    {
        $user = new ();
        $userObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $userObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($user));
        $this->inject($this->subject, 'user', $userObjectStorageMock);

        $this->subject->removeUser($user);
    }

    /**
     * @test
     */
    public function getCategoriesReturnsInitialValueFor()
    {
    }

    /**
     * @test
     */
    public function setCategoriesForSetsCategories()
    {
    }
}
