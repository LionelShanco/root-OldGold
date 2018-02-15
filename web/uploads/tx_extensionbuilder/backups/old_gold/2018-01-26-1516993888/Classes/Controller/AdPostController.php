<?php
namespace OldGold\OldGold\Controller;

/***
 *
 * This file is part of the "OldGoldApplication" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Chetan
 *
 ***/

/**
 * AdPostController
 */
class AdPostController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * adPostRepository
     *
     * @var \OldGold\OldGold\Domain\Repository\AdPostRepository
     * @inject
     */
    protected $adPostRepository = null;

    /**
     * action new
     *
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $newAdPost
     * @return void
     */
    public function createAction(\OldGold\OldGold\Domain\Model\AdPost $newAdPost)
    {

        $this->adPostRepository->add($newAdPost);
        $this->addFlashMessage('the post '.' '.$newAdPost->getTitle().''.'');
        
    }

    /**
     * action edit
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @ignorevalidation $adPost
     * @return void
     */
    public function editAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->view->assign('adPost', $adPost);
    }

    /**
     * action update
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @return void
     */
    public function updateAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->adPostRepository->update($adPost);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param \OldGold\OldGold\Domain\Model\AdPost $adPost
     * @return void
     */
    public function deleteAction(\OldGold\OldGold\Domain\Model\AdPost $adPost)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->adPostRepository->remove($adPost);
        $this->redirect('list');
    }

    /**
     * action adShow
     *
     * @return void
     */
    public function adShowAction()
    {
        {
            $adPost = $this->adPostRepository->findAll();
            $this->view->assign('ads', $adPost);
        }
    }
}
