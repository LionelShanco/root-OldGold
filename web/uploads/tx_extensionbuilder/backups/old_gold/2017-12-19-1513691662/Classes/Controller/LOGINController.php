<?php
namespace Newsiteindie\OldGold\Controller;

/***
 *
 * This file is part of the "OLD-GOLD" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * LOGINController
 */
class LOGINController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * lOGINRepository
     *
     * @var \Newsiteindie\OldGold\Domain\Repository\LOGINRepository
     * @inject
     */
    protected $lOGINRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $lOGINs = $this->lOGINRepository->findAll();
        $this->view->assign('lOGINs', $lOGINs);
    }

    /**
     * action show
     *
     * @param \Newsiteindie\OldGold\Domain\Model\LOGIN $lOGIN
     * @return void
     */
    public function showAction(\Newsiteindie\OldGold\Domain\Model\LOGIN $lOGIN)
    {
        $this->view->assign('lOGIN', $lOGIN);
    }
}
