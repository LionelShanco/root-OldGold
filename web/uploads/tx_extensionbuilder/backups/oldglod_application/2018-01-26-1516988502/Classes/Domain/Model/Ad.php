<?php
namespace OldGlod\OldglodApplication\Domain\Model;
/***
 *
 * This file is part of the "OldGold Application" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018
 *
 ***/
/**
 * Ad
 */
class Ad extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    /**
     * category
     *
     * @var string
     */
    protected $category;
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    /**
     * location
     *
     * @var string
     */
    protected $location = '';
    /**
     * phone
     *
     * @var string
     */
    protected $phone = '';
    /**
     * user
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
     */
    protected $user = 0;
    /**
     * rating
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OldGlod\OldglodApplication\Domain\Model\Rating>
     * @cascade remove
     */
    protected $rating = null;
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
        $this->rating = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * Returns the category
     *
     * @return string $category
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Sets the category
     *
     * @param string $category
     * @return void
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    /**
     * Returns the location
     *
     * @return string $location
     */
    public function getLocation()
    {
        return $this->location;
    }
    /**
     * Sets the location
     *
     * @param string $location
     * @return void
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }
    /**
     * Returns the phone
     *
     * @return string $phone
     */
    public function getPhone()
    {
        return $this->phone;
    }
    /**
     * Sets the phone
     *
     * @param string $phone
     * @return void
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    /**
     * Returns the user
     *
     * @return int $user
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Sets the user
     *
     * @param int $user
     * @return void
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
    /**
     * Adds a Rating
     *
     * @param \OldGlod\OldglodApplication\Domain\Model\Rating $rating
     * @return void
     */
    public function addRating(\OldGlod\OldglodApplication\Domain\Model\Rating $rating)
    {
        $this->rating->attach($rating);
    }
    /**
     * Removes a Rating
     *
     * @param \OldGlod\OldglodApplication\Domain\Model\Rating $ratingToRemove The Rating to be removed
     * @return void
     */
    public function removeRating(\OldGlod\OldglodApplication\Domain\Model\Rating $ratingToRemove)
    {
        $this->rating->detach($ratingToRemove);
    }
    /**
     * Returns the rating
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OldGlod\OldglodApplication\Domain\Model\Rating> $rating
     */
    public function getRating()
    {
        return $this->rating;
    }
    /**
     * Sets the rating
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\OldGlod\OldglodApplication\Domain\Model\Rating> $rating
     * @return void
     */
    public function setRating(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $rating)
    {
        $this->rating = $rating;
    }
}