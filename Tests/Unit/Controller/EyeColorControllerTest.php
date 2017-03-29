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
 * Test case for class T3Dev\Escortmodels\Controller\EyeColorController.
 *
 * @author Dmitry Vasiliev <dmitry@typo3.ru.net>
 */
class EyeColorControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{

	/**
	 * @var \T3Dev\Escortmodels\Controller\EyeColorController
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = $this->getMock('T3Dev\\Escortmodels\\Controller\\EyeColorController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function listActionFetchesAllEyeColorsFromRepositoryAndAssignsThemToView()
	{

		$allEyeColors = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$eyeColorRepository = $this->getMock('T3Dev\\Escortmodels\\Domain\\Repository\\EyeColorRepository', array('findAll'), array(), '', FALSE);
		$eyeColorRepository->expects($this->once())->method('findAll')->will($this->returnValue($allEyeColors));
		$this->inject($this->subject, 'eyeColorRepository', $eyeColorRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('eyeColors', $allEyeColors);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenEyeColorToView()
	{
		$eyeColor = new \T3Dev\Escortmodels\Domain\Model\EyeColor();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('eyeColor', $eyeColor);

		$this->subject->showAction($eyeColor);
	}
}
