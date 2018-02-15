<?php
    namespace OldGlod\OldglodApplication\Domain\Repository;

    use PhpParser\Node\Scalar\String_;
    use TYPO3\CMS\Extbase\Persistence\Repository;

    class AdRepository extends Repository
    {
        /**
         * @param string $category
         * @return ad
         */
        public function findByCategory(String $category){
            $query = $this->createQuery();
            $query->matching(
                $query->equals('category',$category)
            );
            return $query->execute()-getFirst();

        }

    }
