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
 * ADMIN
 */
class ADMIN extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * users
     *
     * @var \Newsiteindie\OldGold\Domain\Model\USER
     */
    protected $users = null;

    /**
     * login
     *
     * @var \Newsiteindie\OldGold\Domain\Model\LOGIN
     */
    protected $login = null;

    /**
     * categories
     *
     * @var \Newsiteindie\OldGold\Domain\Model\CATEGORIES
     */
    protected $categories = null;

    /**
     * rating
     *
     * @var \Newsiteindie\OldGold\Domain\Model\RATING
     */
    protected $rating = null;

    /**
     * serviceads
     *
     * @var \Newsiteindie\OldGold\Domain\Model\SERVICEADDs
     */
    protected $serviceads = null;

    /**
     * Returns the users
     *
     * @return \Newsiteindie\OldGold\Domain\Model\USER $users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Sets the users
     *
     * @param \Newsiteindie\OldGold\Domain\Model\USER $users
     * @return void
     */
    public function setUsers(\Newsiteindie\OldGold\Domain\Model\USER $users)
    {
        $this->users = $users;
    }

    /**
     * Returns the login
     *
     * @return \Newsiteindie\OldGold\Domain\Model\LOGIN $login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Sets the login
     *
     * @param \Newsiteindie\OldGold\Domain\Model\LOGIN $login
     * @return void
     */
    public function setLogin(\Newsiteindie\OldGold\Domain\Model\LOGIN $login)
    {
        $this->login = $login;
    }

    /**
     * Returns the categories
     *
     * @return \Newsiteindie\OldGold\Domain\Model\CATEGORIES $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     *
     * @param \Newsiteindie\OldGold\Domain\Model\CATEGORIES $categories
     * @return void
     */
    public function setCategories(\Newsiteindie\OldGold\Domain\Model\CATEGORIES $categories)
    {
        $this->categories = $categories;
    }

    /**
     * Returns the rating
     *
     * @return \Newsiteindie\OldGold\Domain\Model\RATING $rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Sets the rating
     *
     * @param \Newsiteindie\OldGold\Domain\Model\RATING $rating
     * @return void
     */
    public function setRating(\Newsiteindie\OldGold\Domain\Model\RATING $rating)
    {
        $this->rating = $rating;
    }

    /**
     * Returns the serviceads
     *
     * @return \Newsiteindie\OldGold\Domain\Model\SERVICEADDs $serviceads
     */
    public function getServiceads()
    {
        return $this->serviceads;
    }

    /**
     * Sets the serviceads
     *
     * @param \Newsiteindie\OldGold\Domain\Model\SERVICEADDs $serviceads
     * @return void
     */
    public function setServiceads(\Newsiteindie\OldGold\Domain\Model\SERVICEADDs $serviceads)
    {
        $this->serviceads = $serviceads;
    }
}
