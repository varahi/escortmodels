<?php
namespace T3Dev\Escortmodels\Domain\Model;

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
 * Rate
 */
class Rate extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';
    
    /**
     * rateImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $rateImage = null;   
    
    /**
     * col
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Col>
     * @cascade remove
     */
    protected $col = null;
    
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
    	$this->col = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the rateImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $rateImage
     */
    public function getRateImage()
    {
    	return $this->rateImage;
    }
    
    /**
     * Sets the rateImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $rateImage
     * @return void
     */
    public function setRateImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $rateImage)
    {
    	$this->rateImage = $rateImage;
    }  
     
    /**
     * Adds a Col
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Col $col
     * @return void
     */
    public function addCol(\T3Dev\Escortmodels\Domain\Model\Col $col)
    {
    	$this->col->attach($col);
    }
    
    /**
     * Removes a Col
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Col $colToRemove The Col to be removed
     * @return void
     */
    public function removeCol(\T3Dev\Escortmodels\Domain\Model\Col $colToRemove)
    {
    	$this->col->detach($colToRemove);
    }
    
    /**
     * Returns the col
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Col> $col
     */
    public function getCol()
    {
    	return $this->col;
    }
    
    /**
     * Sets the col
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Col> $col
     * @return void
     */
    public function setCol(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $col)
    {
    	$this->col = $col;
    }    
    
}