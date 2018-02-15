<?php
namespace Newsiteindie\OldGold\Tests\Unit\Controller;

/**
 * Test case.
 */
class LOGINControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Newsiteindie\OldGold\Controller\LOGINController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Newsiteindie\OldGold\Controller\LOGINController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllLOGINsFromRepositoryAndAssignsThemToView()
    {

        $allLOGINs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $lOGINRepository = $this->getMockBuilder(\Newsiteindie\OldGold\Domain\Repository\LOGINRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $lOGINRepository->expects(self::once())->method('findAll')->will(self::returnValue($allLOGINs));
        $this->inject($this->subject, 'lOGINRepository', $lOGINRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('lOGINs', $allLOGINs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenLOGINToView()
    {
        $lOGIN = new \Newsiteindie\OldGold\Domain\Model\LOGIN();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('lOGIN', $lOGIN);

        $this->subject->showAction($lOGIN);
    }
}
