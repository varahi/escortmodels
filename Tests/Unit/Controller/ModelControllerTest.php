<?php
namespace T3Dev\Escortmodels\Tests\Unit\Controller;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Dmitry Vasiliev <dmitry@typo3.ru.net>, T3 Studio
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class T3Dev\Escortmodels\Controller\ModelController.
 *
 * @author Dmitry Vasiliev <dmitry@typo3.ru.net>
 */
class ModelControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \T3Dev\Escortmodels\Controller\ModelController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('T3Dev\\Escortmodels\\Controller\\ModelController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllModelsFromRepositoryAndAssignsThemToView()
	{

		$allModels = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$modelRepository = $this->getMock('T3Dev\\Escortmodels\\Domain\\Repository\\ModelRepository', array('findAll'), array(), '', FALSE);
		$modelRepository->expects($this->once())->method('findAll')->will($this->returnValue($allModels));
		$this->inject($this->subject, 'modelRepository', $modelRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('models', $allModels);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenModelToView()
	{
		$model = new \T3Dev\Escortmodels\Domain\Model\Model();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('model', $model);

		$this->subject->showAction($model);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenModelToModelRepository()
	{
		$model = new \T3Dev\Escortmodels\Domain\Model\Model();

		$modelRepository = $this->getMock('T3Dev\\Escortmodels\\Domain\\Repository\\ModelRepository', array('add'), array(), '', FALSE);
		$modelRepository->expects($this->once())->method('add')->with($model);
		$this->inject($this->subject, 'modelRepository', $modelRepository);

		$this->subject->createAction($model);
	}

	/**
	 * @test
	 */
	public function editActionAssignsTheGivenModelToView()
	{
		$model = new \T3Dev\Escortmodels\Domain\Model\Model();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('model', $model);

		$this->subject->editAction($model);
	}

	/**
	 * @test
	 */
	public function updateActionUpdatesTheGivenModelInModelRepository()
	{
		$model = new \T3Dev\Escortmodels\Domain\Model\Model();

		$modelRepository = $this->getMock('T3Dev\\Escortmodels\\Domain\\Repository\\ModelRepository', array('update'), array(), '', FALSE);
		$modelRepository->expects($this->once())->method('update')->with($model);
		$this->inject($this->subject, 'modelRepository', $modelRepository);

		$this->subject->updateAction($model);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenModelFromModelRepository()
	{
		$model = new \T3Dev\Escortmodels\Domain\Model\Model();

		$modelRepository = $this->getMock('T3Dev\\Escortmodels\\Domain\\Repository\\ModelRepository', array('remove'), array(), '', FALSE);
		$modelRepository->expects($this->once())->method('remove')->with($model);
		$this->inject($this->subject, 'modelRepository', $modelRepository);

		$this->subject->deleteAction($model);
	}
}
