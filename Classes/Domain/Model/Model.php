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
 * Model
 */
class Model extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * name
     *
     * @var string
     */
    protected $name = '';
    
    /**
     * lastName
     *
     * @var string
     */
    protected $lastName = '';    
    
    /**
     * subtitle
     *
     * @var string
     */
    protected $subtitle = '';
    
    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';
    
    /**
     * description
     *
     * @var string
     */
    protected $description = '';
    
    /**
     * description2
     *
     * @var string
     */
    protected $description2 = '';
    
    /**
     * measurements
     *
     * @var string
     */
    protected $measurements = '';    
    
	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\FileReference>
	 * @cascade remove
	 * @lazy
	 */
	protected $image = NULL;
    
    /**
     * topImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
		 * @lazy
     */
    protected $topImage = null;
    
    /**
     * listImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @lazy
     */
    protected $listImage = null; 
    
    /**
     * vipImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @lazy
     */
    protected $vipImage = null;    
    
    /**
     * imageCaption
     *
     * @var string
     */
    protected $imageCaption = '';
    
    /**
     * bottomImage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @lazy
     */
    protected $bottomImage = '';
    
    /**
     * education
     *
     * @var string
     */
    protected $education = '';
    
    /**
     * background
     *
     * @var string
     */
    protected $background = '';
    
    /**
     * fashionDesigner
     *
     * @var string
     */
    protected $fashionDesigner = '';
    
    /**
     * perfume
     *
     * @var string
     */
    protected $perfume = '';
    
    /**
     * interests
     *
     * @var string
     */
    protected $interests = '';
    
    /**
     * lingerieDesigner
     *
     * @var string
     */
    protected $lingerieDesigner = '';
    
    /**
     * flowers
     *
     * @var string
     */
    protected $flowers = '';
    
    /**
     * favoriteTravel
     *
     * @var string
     */
    protected $favoriteTravel = '';
    
    /**
     * sportsInterests
     *
     * @var string
     */
    protected $sportsInterests = '';
    
    /**
     * cuisine
     *
     * @var string
     */
    protected $cuisine = '';
    
    /**
     * jewelry
     *
     * @var string
     */
    protected $jewelry = '';
    
    /**
     * gifts
     *
     * @var string
     */
    protected $gifts = '';    
    
    /**
     * dreamTravel
     *
     * @var string
     */
    protected $dreamTravel = '';
    
    /**
     * clothingStyle
     *
     * @var string
     */
    protected $clothingStyle = '';
    
    /**
     * drinks
     *
     * @var string
     */
    protected $drinks = '';
    
    /**
     * height
     *
     * @var string
     */
    protected $height = '';
    
    /**
     * weight
     *
     * @var string
     */
    protected $weight = '';
    
    /**
     * residence
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Residence
		 * @lazy
     */
    protected $residence = null;
    
    /**
     * nationality
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Nationality
		 * @lazy
     */
    protected $nationality = null;
    
    /**
     * travel
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Travel>
		 * @lazy
     */
    protected $travel = null;
    
    /**
     * size
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Size
		 * @lazy
     */
    protected $size = null;
    
    /**
     * hairColor
     *
     * @var \T3Dev\Escortmodels\Domain\Model\HairColor
		 * @lazy
     */
    protected $hairColor = null;
    
    /**
     * eyeColor
     *
     * @var \T3Dev\Escortmodels\Domain\Model\EyeColor
		 * @lazy
     */
    protected $eyeColor = null;
    
    /**
     * braSize
     *
     * @var string
     */
    protected $braSize = '';
    
    /**
     * shoeSize
     *
     * @var \T3Dev\Escortmodels\Domain\Model\ShoeSize
		 * @lazy
     */
    protected $shoeSize = null;
    
    /**
     * age
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Age
		 * @lazy
     */
    protected $age = null;
    
    /**
     * tatoos
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Value
		 * @lazy
     */
    protected $tatoos = null;
    
    /**
     * smoking
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Value
		 * @lazy
     */
    protected $smoking = null;
    
    /**
     * language
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Language>
		 * @lazy
     */
    protected $language = null;
    
    /**
     * rate
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Rate
		 * @lazy
     */
    protected $rate = null;
    
    /**
     * col
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Col>
     * @cascade remove
		 * @lazy
     */
    protected $col = null;
    
    /**
     * piercing
     *
     * @var \T3Dev\Escortmodels\Domain\Model\Value
		 * @lazy
     */
    protected $piercing = null;    
    
    /**
     * categories
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Category>
		 * @lazy
     */
    protected $categories = null;
    
    /**
     * hideNoAuth
     *
     * @var boolean
     */
    protected $hideNoAuth = FALSE;    
    
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
    	$this->language = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    	$this->travel = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    	$this->col = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    	$this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
    	return $this->name;
    }
    
    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
    	$this->name = $name;
    }  
    
    /**
     * Returns the lastName
     *
     * @return string $lastName
     */
    public function getLastName()
    {
    	return $this->lastName;
    }
    
    /**
     * Sets the lastName
     *
     * @param string $lastName
     * @return void
     */
    public function setLastName($lastName)
    {
    	$this->lastName = $lastName;
    }    
    
    
    /**
     * Returns the subtitle
     *
     * @return string $subtitle
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    
    /**
     * Sets the subtitle
     *
     * @param string $subtitle
     * @return void
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }
    
    /**
     * Returns the teaser
     *
     * @return string $teaser
     */
    public function getTeaser()
    {
        return $this->teaser;
    }
    
    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
    	$this->image->attach($image);
    }
    
    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove) {
    	$this->image->detach($imageToRemove);
    }
    
    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     */
    public function getImage() {
    	return $this->image;
    }
    
    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $image) {
    	$this->image = $image;
    }       
    
    /**
     * Returns the topImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $topImage
     */
    public function getTopImage()
    {
        return $this->topImage;
    }
    
    /**
     * Sets the topImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $topImage
     * @return void
     */
    public function setTopImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $topImage)
    {
        $this->topImage = $topImage;
    }
     
    /**
     * Returns the listImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $listImage
     */
    public function getListImage()
    {
    	return $this->listImage;
    }
    
    /**
     * Sets the listImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $listImage
     * @return void
     */
    public function setListImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $listImage)
    {
    	$this->listImage = $listImage;
    }   
    
    /**
     * Returns the vipImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $vipImage
     */
    public function getVipImage()
    {
    	return $this->vipImage;
    }
    
    /**
     * Sets the vipImage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $vipImage
     * @return void
     */
    public function setVipImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $vipImage)
    {
    	$this->vipImage = $vipImage;
    }       
    
    /**
     * Returns the residence
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Residence $residence
     */
    public function getResidence()
    {
        return $this->residence;
    }
    
    /**
     * Sets the residence
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Residence $residence
     * @return void
     */
    public function setResidence(\T3Dev\Escortmodels\Domain\Model\Residence $residence)
    {
        $this->residence = $residence;
    }
    
    /**
     * Returns the nationality
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Nationality $nationality
     */
    public function getNationality()
    {
        return $this->nationality;
    }
    
    /**
     * Sets the nationality
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Nationality $nationality
     * @return void
     */
    public function setNationality(\T3Dev\Escortmodels\Domain\Model\Nationality $nationality)
    {
        $this->nationality = $nationality;
    }
    
    /**
     * Adds a travel
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Language $travel
     * @return void
     */
    public function addTravel(\T3Dev\Escortmodels\Domain\Model\Travel $travel)
    {
    	$this->travel->attach($travel);
    }    
    
    /**
     * Removes a Travel
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Language $travelToRemove The Travel to be removed
     * @return void
     */
    public function removeTravel(\T3Dev\Escortmodels\Domain\Model\Travel $travelToRemove)
    {
    	$this->travel->detach($travelToRemove);
    }  
    
    /**
     * Returns the travel
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Travel> travel
     */
    public function getTravel()
    {
    	return $this->travel;
    }    
    
    /**
     * Sets the travel
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Travel> $travel
     * @return void
     */
    public function setTravel(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $travel)
    {
    	$this->travel = $travel;
    }      
    
    /**
     * Returns the size
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Size $size
     */
    public function getSize()
    {
        return $this->size;
    }
    
    /**
     * Sets the size
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Size $size
     * @return void
     */
    public function setSize(\T3Dev\Escortmodels\Domain\Model\Size $size)
    {
        $this->size = $size;
    }
    
    /**
     * Returns the hairColor
     *
     * @return \T3Dev\Escortmodels\Domain\Model\HairColor $hairColor
     */
    public function getHairColor()
    {
        return $this->hairColor;
    }
    
    /**
     * Sets the hairColor
     *
     * @param \T3Dev\Escortmodels\Domain\Model\HairColor $hairColor
     * @return void
     */
    public function setHairColor(\T3Dev\Escortmodels\Domain\Model\HairColor $hairColor)
    {
        $this->hairColor = $hairColor;
    }
    
    /**
     * Returns the measurements
     *
     * @return string $measurements
     */
    public function getMeasurements()
    {
        return $this->measurements;
    }
    
    /**
     * Sets the measurements
     *
     * @param string $measurements
     * @return void
     */
    public function setMeasurements($measurements)
    {
        $this->measurements = $measurements;
    }
    
    /**
     * Returns the eyeColor
     *
     * @return \T3Dev\Escortmodels\Domain\Model\EyeColor $eyeColor
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }
    
    /**
     * Sets the eyeColor
     *
     * @param \T3Dev\Escortmodels\Domain\Model\EyeColor $eyeColor
     * @return void
     */
    public function setEyeColor(\T3Dev\Escortmodels\Domain\Model\EyeColor $eyeColor)
    {
        $this->eyeColor = $eyeColor;
    }
    
    /**
     * Returns the braSize
     *
     * @return string $braSize
     */
    public function getBraSize()
    {
    	return $this->braSize;
    }
    
    /**
     * Sets the braSize
     *
     * @param string $braSize
     * @return void
     */
    public function setBraSize($braSize)
    {
    	$this->braSize = $braSize;
    }   
    
    /**
     * Returns the shoeSize
     *
     * @return \T3Dev\Escortmodels\Domain\Model\ShoeSize $shoeSize
     */
    public function getShoeSize()
    {
        return $this->shoeSize;
    }
    
    /**
     * Sets the shoeSize
     *
     * @param \T3Dev\Escortmodels\Domain\Model\ShoeSize $shoeSize
     * @return void
     */
    public function setShoeSize(\T3Dev\Escortmodels\Domain\Model\ShoeSize $shoeSize)
    {
        $this->shoeSize = $shoeSize;
    }
    
    /**
     * Returns the age
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Age $age
     */
    public function getAge()
    {
        return $this->age;
    }
    
    /**
     * Sets the age
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Age $age
     * @return void
     */
    public function setAge(\T3Dev\Escortmodels\Domain\Model\Age $age)
    {
        $this->age = $age;
    }
        
    /**
     * Returns the education
     *
     * @return string $education
     */
    public function getEducation()
    {
        return $this->education;
    }
    
    /**
     * Sets the education
     *
     * @param string $education
     * @return void
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }
    
    /**
     * Returns the background
     *
     * @return string $background
     */
    public function getBackground()
    {
        return $this->background;
    }
    
    /**
     * Sets the background
     *
     * @param string $background
     * @return void
     */
    public function setBackground($background)
    {
        $this->background = $background;
    }
    
    /**
     * Returns the fashionDesigner
     *
     * @return string $fashionDesigner
     */
    public function getFashionDesigner()
    {
        return $this->fashionDesigner;
    }
    
    /**
     * Sets the fashionDesigner
     *
     * @param string $fashionDesigner
     * @return void
     */
    public function setFashionDesigner($fashionDesigner)
    {
        $this->fashionDesigner = $fashionDesigner;
    }
    
    /**
     * Returns the perfume
     *
     * @return string $perfume
     */
    public function getPerfume()
    {
        return $this->perfume;
    }
    
    /**
     * Sets the perfume
     *
     * @param string $perfume
     * @return void
     */
    public function setPerfume($perfume)
    {
        $this->perfume = $perfume;
    }
    
    /**
     * Returns the interests
     *
     * @return string $interests
     */
    public function getInterests()
    {
        return $this->interests;
    }
    
    /**
     * Sets the interests
     *
     * @param string $interests
     * @return void
     */
    public function setInterests($interests)
    {
        $this->interests = $interests;
    }
    
    /**
     * Returns the lingerieDesigner
     *
     * @return string $lingerieDesigner
     */
    public function getLingerieDesigner()
    {
        return $this->lingerieDesigner;
    }
    
    /**
     * Sets the lingerieDesigner
     *
     * @param string $lingerieDesigner
     * @return void
     */
    public function setLingerieDesigner($lingerieDesigner)
    {
        $this->lingerieDesigner = $lingerieDesigner;
    }
    
    /**
     * Returns the flowers
     *
     * @return string $flowers
     */
    public function getFlowers()
    {
        return $this->flowers;
    }
    
    /**
     * Sets the flowers
     *
     * @param string $flowers
     * @return void
     */
    public function setFlowers($flowers)
    {
        $this->flowers = $flowers;
    }
    
    /**
     * Returns the favoriteTravel
     *
     * @return string $favoriteTravel
     */
    public function getFavoriteTravel()
    {
        return $this->favoriteTravel;
    }
    
    /**
     * Sets the favoriteTravel
     *
     * @param string $favoriteTravel
     * @return void
     */
    public function setFavoriteTravel($favoriteTravel)
    {
        $this->favoriteTravel = $favoriteTravel;
    }
    
    /**
     * Returns the sportsInterests
     *
     * @return string $sportsInterests
     */
    public function getSportsInterests()
    {
        return $this->sportsInterests;
    }
    
    /**
     * Sets the sportsInterests
     *
     * @param string $sportsInterests
     * @return void
     */
    public function setSportsInterests($sportsInterests)
    {
        $this->sportsInterests = $sportsInterests;
    }
    
    /**
     * Returns the cuisine
     *
     * @return string $cuisine
     */
    public function getCuisine()
    {
        return $this->cuisine;
    }
    
    /**
     * Sets the cuisine
     *
     * @param string $cuisine
     * @return void
     */
    public function setCuisine($cuisine)
    {
        $this->cuisine = $cuisine;
    }
    
    /**
     * Returns the jewelry
     *
     * @return string $jewelry
     */
    public function getJewelry()
    {
        return $this->jewelry;
    }
    
    /**
     * Sets the jewelry
     *
     * @param string $jewelry
     * @return void
     */
    public function setJewelry($jewelry)
    {
        $this->jewelry = $jewelry;
    }   
    
    /**
     * Returns the gifts
     *
     * @return string $gifts
     */
    public function getGifts()
    {
    	return $this->gifts;
    }
    
    /**
     * Sets the gifts
     *
     * @param string $gifts
     * @return void
     */
    public function setGifts($gifts)
    {
    	$this->gifts = $gifts;
    }   
    
    /**
     * Returns the dreamTravel
     *
     * @return string $dreamTravel
     */
    public function getDreamTravel()
    {
        return $this->dreamTravel;
    }
    
    /**
     * Sets the dreamTravel
     *
     * @param string $dreamTravel
     * @return void
     */
    public function setDreamTravel($dreamTravel)
    {
        $this->dreamTravel = $dreamTravel;
    }
    
    /**
     * Returns the clothingStyle
     *
     * @return string $clothingStyle
     */
    public function getClothingStyle()
    {
        return $this->clothingStyle;
    }
    
    /**
     * Sets the clothingStyle
     *
     * @param string $clothingStyle
     * @return void
     */
    public function setClothingStyle($clothingStyle)
    {
        $this->clothingStyle = $clothingStyle;
    }
    
    /**
     * Returns the drinks
     *
     * @return string $drinks
     */
    public function getDrinks()
    {
        return $this->drinks;
    }
    
    /**
     * Sets the drinks
     *
     * @param string $drinks
     * @return void
     */
    public function setDrinks($drinks)
    {
        $this->drinks = $drinks;
    }
    
    /**
     * Returns the tatoos
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Value $tatoos
     */
    public function getTatoos()
    {
        return $this->tatoos;
    }
    
    /**
     * Sets the tatoos
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Value $tatoos
     * @return void
     */
    public function setTatoos(\T3Dev\Escortmodels\Domain\Model\Value $tatoos)
    {
        $this->tatoos = $tatoos;
    }
    
    /**
     * Returns the smoking
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Value $smoking
     */
    public function getSmoking()
    {
        return $this->smoking;
    }
    
    /**
     * Sets the smoking
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Value $smoking
     * @return void
     */
    public function setSmoking(\T3Dev\Escortmodels\Domain\Model\Value $smoking)
    {
        $this->smoking = $smoking;
    }
    
    /**
     * Returns the description2
     *
     * @return string $description2
     */
    public function getDescription2()
    {
        return $this->description2;
    }
    
    /**
     * Sets the description2
     *
     * @param string $description2
     * @return void
     */
    public function setDescription2($description2)
    {
        $this->description2 = $description2;
    }
    
    /**
     * Returns the rate
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Rate $rate
     */
    public function getRate()
    {
        return $this->rate;
    }
    
    /**
     * Sets the rate
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Rate $rate
     * @return void
     */
    public function setRate(\T3Dev\Escortmodels\Domain\Model\Rate $rate)
    {
        $this->rate = $rate;
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
    
    /**
     * Returns the imageCaption
     *
     * @return string $imageCaption
     */
    public function getImageCaption()
    {
        return $this->imageCaption;
    }
    
    /**
     * Sets the imageCaption
     *
     * @param string $imageCaption
     * @return void
     */
    public function setImageCaption($imageCaption)
    {
        $this->imageCaption = $imageCaption;
    }
    
    /**
     * Returns the bottomImage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference bottomImage
     */
    public function getBottomImage()
    {
        return $this->bottomImage;
    }
    
    /**
     * Sets the bottomImage
     *
     * @param string $bottomImage
     * @return void
     */
    public function setBottomImage($bottomImage)
    {
        $this->bottomImage = $bottomImage;
    }
    
    /**
     * Returns the height
     *
     * @return string $height
     */
    public function getHeight()
    {
        return $this->height;
    }
    
    /**
     * Sets the height
     *
     * @param string $height
     * @return void
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    
    /**
     * Returns the weight
     *
     * @return string $weight
     */
    public function getWeight()
    {
        return $this->weight;
    }
    
    /**
     * Sets the weight
     *
     * @param string $weight
     * @return void
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    
    /**
     * Adds a Langauge
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Language $language
     * @return void
     */
    public function addLanguage(\T3Dev\Escortmodels\Domain\Model\Language $language)
    {
        $this->language->attach($language);
    }
    
    /**
     * Removes a Langauge
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Language $languageToRemove The Language to be removed
     * @return void
     */
    public function removeLanguage(\T3Dev\Escortmodels\Domain\Model\Language $languageToRemove)
    {
        $this->language->detach($languageToRemove);
    }
    
    /**
     * Returns the language
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Language> language
     */
    public function getLanguage()
    {
        return $this->language;
    }
    
    /**
     * Sets the language
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Language> $language
     * @return void
     */
    public function setLanguage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $language)
    {
        $this->language = $language;
    }
    
    /**
     * Returns the piercing
     *
     * @return \T3Dev\Escortmodels\Domain\Model\Value $piercing
     */
    public function getPiercing()
    {
        return $this->piercing;
    }
    
    /**
     * Sets the piercing
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Value $piercing
     * @return void
     */
    public function setPiercing(\T3Dev\Escortmodels\Domain\Model\Value $piercing)
    {
        $this->piercing = $piercing;
    }
        
    /**
     * Adds a Category
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\T3Dev\Escortmodels\Domain\Model\Category $category)
    {
    	$this->categories->attach($category);
    }
    
    /**
     * Removes a Category
     *
     * @param \T3Dev\Escortmodels\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\T3Dev\Escortmodels\Domain\Model\Category $categoryToRemove)
    {
    	$this->categories->detach($categoryToRemove);
    }
    
    /**
     * Returns the categories
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
    	return $this->categories;
    }
    
    /**
     * Sets the categories
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\T3Dev\Escortmodels\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
    	$this->categories = $categories;
    }   
    
    /**
     * Returns the hideNoAuth
     *
     * @return boolean hideNoAuth
     */
    public function getHideNoAuth() {
    	return $this->hideNoAuth;
    }
    
    /**
     * Sets the hideNoAuth
     *
     * @param boolean $hideNoAuth
     * @return boolean hideNoAuth
     */
    public function setHideNoAuth($hideNoAuth) {
    	$this->hideNoAuth = $hideNoAuth;
    }    

}