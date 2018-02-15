<?php
namespace OldGlod\OldglodApplication\Controller;
use OldGlod\OldglodApplication\Domain\Model\Ad;
use OldGlod\OldglodApplication\Domain\Repository\AdRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
class ManagementController extends ActionController
{
    /**
     * @var AdRepository
     */
    public $adRepository;
    /**
     * @param AdRepository $adRepository
     */
    public function injectAdRepository(AdRepository $adRepository)
    {
        $this->adRepository = $adRepository;
    }
    public function listAction()
    {
        $ad = $this->adRepository->findAll();
        $this->view->assign('ad', $ad);
    }
    /**
     * @param Ad|null $ad
     */
    public function newAction(Ad $ad = null)
    {
        if ($ad === null) {
            $ad = new Ad();
        }
        $this->view->assign('ad', $ad);
    }
    /**
     * @param Ad $ad
     */
    public function createAction(Ad $ad)
    {
        try {
            $this->adRepository->add($ad);
        } catch (\Exception $exception) {
            // @todo Enhance this...
            $this->addFlashMessage($exception->getMessage());
        }
        $this->redirect('list');
    }
    /**
     * @param Ad $ad
     */
    public function editAction(Ad $ad)
    {
        var_dump($ad);
    }
    /**
     * @param Ad $ad
     */
    public function updateAction(Ad $ad)
    {
    }
    /**
     * @param Ad $ad
     */
    public function deleteAction(Ad $ad)
    {
    }
}