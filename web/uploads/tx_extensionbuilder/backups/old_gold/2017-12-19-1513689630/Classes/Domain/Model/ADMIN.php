<?php
namespace HOFUNIVERISTY\OldGold\Domain\Model;

/***
 *
 * This file is part of the "OLDGOLD" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * ADMIN
 */
class ADMIN extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * id
     *
     * @var string
     */
    protected $id = '';

    /**
     * userName
     *
     * @var string
     */
    protected $userName = '';

    /**
     * Returns the id
     *
     * @return string $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the id
     *
     * @param string $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Returns the userName
     *
     * @return string $userName
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * Sets the userName
     *
     * @param string $userName
     * @return void
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }
}
