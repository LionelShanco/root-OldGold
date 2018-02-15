<?php
namespace OldGold\OldGold\Domain\Model;
/**
 * Created by PhpStorm.
 * User: lionel joseph
 * Date: 09-02-2018
 * Time: 17:25
 */
/**
 * Class FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{
    /**
     * Uid of a sys_file
     *
     * @var int
     */
    protected $originalFileIdentifier;
    /**
     * @param \TYPO3\CMS\Core\Resource\ResourceInterface $originalResource
     */
    public function setOriginalResource(\TYPO3\CMS\Core\Resource\ResourceInterface $originalResource)
    {
        $this->setFileReference($originalResource);
    }
    /**
     * @param \TYPO3\CMS\Core\Resource\FileReference $originalResource
     */
    private function setFileReference(\TYPO3\CMS\Core\Resource\FileReference $originalResource)
    {
        $this->originalResource = $originalResource;
        $this->originalFileIdentifier = (int)$originalResource->getOriginalFile()->getUid();
    }
}