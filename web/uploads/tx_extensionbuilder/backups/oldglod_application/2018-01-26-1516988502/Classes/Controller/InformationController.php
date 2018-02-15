<?php
namespace OldGlod\OldglodApplication\Controller;

 use OldGlod\OldglodApplication\Domain\Repository\AdRepository;
 use TYPO3\CMS\Extbase\Domain\Model\Category;
 use TYPO3\CMS\Extbase\Domain\Repository\CategoryRepository;
 use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

 class InformationController extends ActionController
 {
        /**
         * @var AdRepository
         */
        public $adRepository;

     /**
      * @var CategoryRepository
      */
     public $categoryRepository;

     /**
      * @param AdRepository $adRepository
      */
     public function injectAdRepository(AdRepository $adRepository)
     {
                $this->adRepository = $adRepository;
            }

     /**
      * @param CategoryRepository $categoryRepository
      */
     public function injectCategoryRepository(CategoryRepository $categoryRepository)
     {
                $this->categoryRepository = $categoryRepository;
            }

     public function listAction()
     {
                $ads = $this->adRepository->findAll();
                $categories = $this->categoryRepository->findAll();
                $this->view->assign('ads', $ads);
                $this->view->assign('categories', $categories);
            }

     /**
      * @param Category $category
      */
     public function listCategoryAction(Category $category)
     {
                $this->adRepository->findByCategory();
                $this->view->assign('categories',$category);// create new AdRepository::findByCategory -> search for that in Extbase book
                // pass results to view
            }
 }