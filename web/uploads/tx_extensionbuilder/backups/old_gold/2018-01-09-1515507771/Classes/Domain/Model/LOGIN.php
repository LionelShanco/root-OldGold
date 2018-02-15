<?php
namespace Newsiteindie\OldGold\Domain\Model;

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
 * LOGIN
 */
class LOGIN extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * user
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<>
     * @cascade remove
     */
    protected $user = null;

    /**
     * categories
     *
     * @var
     */
    protected $categories = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->user = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a
     *
     * @param  $user
     * @return void
     */
    public function addUser($user)
    {
        $this->user->attach($user);
    }

    /**
     * Removes a
     *
     * @param $userToRemove The  to be removed
     * @return void
     */
    public function removeUser($userToRemove)
    {
        $this->user->detach($userToRemove);
    }

    /**
     * Returns the user
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<> $user
     * @return void
     */
    public function setUser(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $user)
    {
        $this->user = $user;
    }

    /**
     * Returns the categories
     *
     * @return  $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param string $categories
     * @return void
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }
}
