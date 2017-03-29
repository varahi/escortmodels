<?php
namespace T3Dev\Escortmodels\Domain\Repository;

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
 * The repository for Models
 */
class ModelRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /**
     * @var array
     */
    protected $defaultOrderings = array(
  		'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
   		'last_name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    	'name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING    		
    );

    
    /**
     * @var array
     */
    public function findByCategory($categories) {
    	$query = $this->createQuery();
    	return $query->matching(
    		$query->logicalAnd(
    			$query->in('categories.uid',\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',',$categories))
    			)
    	)
    	->setOrderings(array(
    		'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    		'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
    	))
    	->execute();
    } 
    
    
    /**
     * @var array
     */
    public function findByCategoryAndOnlyPublic($categories) {
    	$query = $this->createQuery();
    	return $query->matching(
    		$query->logicalAnd(
    			$query->in('categories.uid',\TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',',$categories)),
    			$query->equals('hide_no_auth', '0')
    			)
    	)
    	->setOrderings(array(
   			'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING,
   			'title' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    	))
    	->execute();
    }    
    
    
    public function findPublicModels() {
    	$query = $this->createQuery();
    	return $query->matching(
    		$query->logicalAnd(
    			$query->equals('hide_no_auth', '0')
    		)
    	)
		->setOrderings(array('sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING))
   		->execute();
    }    
    
}