<?php
namespace T3Dev\Escortmodels\Domain\Model;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016 Dmitry Vasiliev <dmitry@typo3.ru.net>, Devcompany
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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * parentcategory
     *
     * @var string
     */
    protected $parentcategory = '';
    
    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
		 * @lazy
     */
    protected $images = null;
    
    /**
     * link
     *
     * @var string
     */
    protected $link = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * brand
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Model>
		 * @lazy
     */
    protected $model = null;
    
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
        $this->brand = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the parentcategory
     *
     * @return string $parentcategory
     */
    public function getParentcategory()
    {
        return $this->parentcategory;
    }
    
    /**
     * Sets the parentcategory
     *
     * @param string $parentcategory
     * @return void
     */
    public function setParentcategory($parentcategory)
    {
        $this->parentcategory = $parentcategory;
    }
    
    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Domain\Model\FileReference $images)
    {
        $this->images = $images;
    }
    
    /**
     * Returns the link
     *
     * @return string $link
     */
    public function getLink()
    {
        return $this->link;
    }
    
    /**
     * Sets the link
     *
     * @param string $link
     * @return void
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
    
    /**
     * Returns the description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     * Adds a
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $model
     * @return void
     */
    public function addModel($model)
    {
        $this->model->attach($model);
    }
    
    /**
     * Removes a model
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Model $modelToRemove The Model to be removed
     * @return void
     */
    public function removeModel($modelToRemove)
    {
        $this->model->detach($modelToRemove);
    }
    
    /**
     * Returns the model
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Model> model
     */
    public function getModel()
    {
        return $this->model;
    }
    
    /**
     * Sets the model
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Model> $model
     * @return void
     */
    public function setBrand(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $model)
    {
        $this->model = $model;
    }

}