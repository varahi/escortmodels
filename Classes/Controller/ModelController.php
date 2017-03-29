<?php
namespace T3Dev\Escortmodels\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Dmitry Vasiliev <dmitry@typo3.ru.net>, T3 Studio
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ModelController
 */
class ModelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	
	/**
	 * persistenceManager
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
	 * @inject
	 */
	protected $persistenceManager;
	
	/**
	 * configurationManager
	 *
	 * @var TYPO3\CMS\Extbase\Configuration\ConfigurationManager
	 * @inject
	 */
	protected $configurationManager;	
	
    /**
     * travelRepository
     *
     * @var \T3Dev\Escortmodels\Domain\Repository\TravelRepository
     * @inject
     */
    protected $travelRepository = NULL;
    
    /**
     * accessControll
     *
     * @var \T3Dev\Escortmodels\Service\AccessControlService
     * @inject
     */
    protected $accessControllService = null;    

    /**
     * modelRepository
     *
     * @var \T3Dev\Escortmodels\Domain\Repository\ModelRepository
     * @inject
     */
    protected $modelRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
    	$this->view->assign('settings', $this->settings);
    	$categories = $this->settings['categories'];

    	if ($this->accessControllService->hasLoggedInFrontendUser()) {
        	$models = $this->modelRepository->findByCategory($categories);
        	$this->view->assign('models', $models);
        	//$travels = $this->travelRepository->findOnList();
        	//$this->view->assign('travels', $travels); 
    	} else {
        	$models = $this->modelRepository->findByCategoryAndOnlyPublic($categories);
        	$this->view->assign('models', $models);
        	//$travels = $this->travelRepository->findOnList();
        	//$this->view->assign('travels', $travels); 
    	}
             
    }
    
    /**
     * action show
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $model
     * @return void
     */
    public function showAction(\T3Dev\Escortmodels\Domain\Model\Model $model)
    {
        $this->view->assign('model', $model);
    }
    
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
     * @param \T3Dev\Escortmodels\Domain\Model\Model $newModel
     * @return void
     */
    public function createAction(\T3Dev\Escortmodels\Domain\Model\Model $newModel)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->modelRepository->add($newModel);
        $this->redirect('list');
    }
    
    /**
     * action edit
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $model
     * @ignorevalidation $model
     * @return void
     */
    public function editAction(\T3Dev\Escortmodels\Domain\Model\Model $model)
    {
        $this->view->assign('model', $model);
    }
    
    /**
     * action update
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $model
     * @return void
     */
    public function updateAction(\T3Dev\Escortmodels\Domain\Model\Model $model)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->modelRepository->update($model);
        $this->redirect('list');
    }
    
    /**
     * action delete
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $model
     * @return void
     */
    public function deleteAction(\T3Dev\Escortmodels\Domain\Model\Model $model)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->modelRepository->remove($model);
        $this->redirect('list');
    }

}