<?php
namespace T3Dev\Escortmodels\Controller;

/**
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     *
     * @var \T3Dev\Escortmodels\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        //$categories = $this->categoryRepository->findAll();
        $categories = $this->categoryRepository->findByFilter();        
        $this->view->assign('categories', $categories);
    }
    
    /**
     * action show
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\T3Dev\Escortmodels\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }

}