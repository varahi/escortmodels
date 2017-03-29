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
 * RateController
 */
class RateController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * rateRepository
     *
     * @var \T3Dev\Escortmodels\Domain\Repository\RateRepository
     * @inject
     */
    protected $rateRepository = NULL;
    
    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $rates = $this->rateRepository->findAll();
        $this->view->assign('rates', $rates);
    }
    
    /**
     * action show
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Rate $rate
     * @return void
     */
    public function showAction(\T3Dev\Escortmodels\Domain\Model\Rate $rate)
    {
        $this->view->assign('rate', $rate);
    }

}