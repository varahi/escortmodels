<?php

namespace T3Dev\Escortmodels\Tests\Unit\Domain\Model;

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
 * Test case for class \T3Dev\Escortmodels\Domain\Model\Model.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Dmitry Vasiliev <dmitry@typo3.ru.net>
 */
class ModelTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
	/**
	 * @var \T3Dev\Escortmodels\Domain\Model\Model
	 */
	protected $subject = NULL;

	public function setUp()
	{
		$this->subject = new \T3Dev\Escortmodels\Domain\Model\Model();
	}

	public function tearDown()
	{
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle()
	{
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSubtitleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSubtitle()
		);
	}

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle()
	{
		$this->subject->setSubtitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'subtitle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTeaserReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getTeaser()
		);
	}

	/**
	 * @test
	 */
	public function setTeaserForStringSetsTeaser()
	{
		$this->subject->setTeaser('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'teaser',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription()
	{
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescription2ReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDescription2()
		);
	}

	/**
	 * @test
	 */
	public function setDescription2ForStringSetsDescription2()
	{
		$this->subject->setDescription2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTopImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTopImage()
		);
	}

	/**
	 * @test
	 */
	public function setTopImageForFileReferenceSetsTopImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setTopImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'topImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageCaptionReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getImageCaption()
		);
	}

	/**
	 * @test
	 */
	public function setImageCaptionForStringSetsImageCaption()
	{
		$this->subject->setImageCaption('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'imageCaption',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBottomImageReturnsInitialValueForFileReference()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBottomImage()
		);
	}

	/**
	 * @test
	 */
	public function setBottomImageForFileReferenceSetsBottomImage()
	{
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setBottomImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'bottomImage',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEducationReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getEducation()
		);
	}

	/**
	 * @test
	 */
	public function setEducationForStringSetsEducation()
	{
		$this->subject->setEducation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'education',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBackgroundReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getBackground()
		);
	}

	/**
	 * @test
	 */
	public function setBackgroundForStringSetsBackground()
	{
		$this->subject->setBackground('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'background',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFashionDesignerReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFashionDesigner()
		);
	}

	/**
	 * @test
	 */
	public function setFashionDesignerForStringSetsFashionDesigner()
	{
		$this->subject->setFashionDesigner('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'fashionDesigner',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPerfumeReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getPerfume()
		);
	}

	/**
	 * @test
	 */
	public function setPerfumeForStringSetsPerfume()
	{
		$this->subject->setPerfume('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'perfume',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInterestsReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getInterests()
		);
	}

	/**
	 * @test
	 */
	public function setInterestsForStringSetsInterests()
	{
		$this->subject->setInterests('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'interests',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLingerieDesignerReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getLingerieDesigner()
		);
	}

	/**
	 * @test
	 */
	public function setLingerieDesignerForStringSetsLingerieDesigner()
	{
		$this->subject->setLingerieDesigner('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lingerieDesigner',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFlowersReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFlowers()
		);
	}

	/**
	 * @test
	 */
	public function setFlowersForStringSetsFlowers()
	{
		$this->subject->setFlowers('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'flowers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFavoriteTravelReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getFavoriteTravel()
		);
	}

	/**
	 * @test
	 */
	public function setFavoriteTravelForStringSetsFavoriteTravel()
	{
		$this->subject->setFavoriteTravel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'favoriteTravel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSportsInterestsReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getSportsInterests()
		);
	}

	/**
	 * @test
	 */
	public function setSportsInterestsForStringSetsSportsInterests()
	{
		$this->subject->setSportsInterests('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sportsInterests',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCuisineReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getCuisine()
		);
	}

	/**
	 * @test
	 */
	public function setCuisineForStringSetsCuisine()
	{
		$this->subject->setCuisine('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'cuisine',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getJewelryReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getJewelry()
		);
	}

	/**
	 * @test
	 */
	public function setJewelryForStringSetsJewelry()
	{
		$this->subject->setJewelry('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'jewelry',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDreamTravelReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDreamTravel()
		);
	}

	/**
	 * @test
	 */
	public function setDreamTravelForStringSetsDreamTravel()
	{
		$this->subject->setDreamTravel('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dreamTravel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getClothingStyleReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getClothingStyle()
		);
	}

	/**
	 * @test
	 */
	public function setClothingStyleForStringSetsClothingStyle()
	{
		$this->subject->setClothingStyle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'clothingStyle',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDrinksReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getDrinks()
		);
	}

	/**
	 * @test
	 */
	public function setDrinksForStringSetsDrinks()
	{
		$this->subject->setDrinks('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'drinks',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHeightReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getHeight()
		);
	}

	/**
	 * @test
	 */
	public function setHeightForStringSetsHeight()
	{
		$this->subject->setHeight('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'height',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeightReturnsInitialValueForString()
	{
		$this->assertSame(
			'',
			$this->subject->getWeight()
		);
	}

	/**
	 * @test
	 */
	public function setWeightForStringSetsWeight()
	{
		$this->subject->setWeight('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'weight',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getResidenceReturnsInitialValueForResidence()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getResidence()
		);
	}

	/**
	 * @test
	 */
	public function setResidenceForResidenceSetsResidence()
	{
		$residenceFixture = new \T3Dev\Escortmodels\Domain\Model\Residence();
		$this->subject->setResidence($residenceFixture);

		$this->assertAttributeEquals(
			$residenceFixture,
			'residence',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNationalityReturnsInitialValueForNationality()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getNationality()
		);
	}

	/**
	 * @test
	 */
	public function setNationalityForNationalitySetsNationality()
	{
		$nationalityFixture = new \T3Dev\Escortmodels\Domain\Model\Nationality();
		$this->subject->setNationality($nationalityFixture);

		$this->assertAttributeEquals(
			$nationalityFixture,
			'nationality',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTravelReturnsInitialValueForTravel()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTravel()
		);
	}

	/**
	 * @test
	 */
	public function setTravelForTravelSetsTravel()
	{
		$travelFixture = new \T3Dev\Escortmodels\Domain\Model\Travel();
		$this->subject->setTravel($travelFixture);

		$this->assertAttributeEquals(
			$travelFixture,
			'travel',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSizeReturnsInitialValueForSize()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getSize()
		);
	}

	/**
	 * @test
	 */
	public function setSizeForSizeSetsSize()
	{
		$sizeFixture = new \T3Dev\Escortmodels\Domain\Model\Size();
		$this->subject->setSize($sizeFixture);

		$this->assertAttributeEquals(
			$sizeFixture,
			'size',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHairColorReturnsInitialValueForHairColor()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getHairColor()
		);
	}

	/**
	 * @test
	 */
	public function setHairColorForHairColorSetsHairColor()
	{
		$hairColorFixture = new \T3Dev\Escortmodels\Domain\Model\HairColor();
		$this->subject->setHairColor($hairColorFixture);

		$this->assertAttributeEquals(
			$hairColorFixture,
			'hairColor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMeasurementsReturnsInitialValueForMeasurements()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getMeasurements()
		);
	}

	/**
	 * @test
	 */
	public function setMeasurementsForMeasurementsSetsMeasurements()
	{
		$measurementsFixture = new \T3Dev\Escortmodels\Domain\Model\Measurements();
		$this->subject->setMeasurements($measurementsFixture);

		$this->assertAttributeEquals(
			$measurementsFixture,
			'measurements',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEyeColorReturnsInitialValueForEyeColor()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getEyeColor()
		);
	}

	/**
	 * @test
	 */
	public function setEyeColorForEyeColorSetsEyeColor()
	{
		$eyeColorFixture = new \T3Dev\Escortmodels\Domain\Model\EyeColor();
		$this->subject->setEyeColor($eyeColorFixture);

		$this->assertAttributeEquals(
			$eyeColorFixture,
			'eyeColor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBraSizeReturnsInitialValueForBraSize()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getBraSize()
		);
	}

	/**
	 * @test
	 */
	public function setBraSizeForBraSizeSetsBraSize()
	{
		$braSizeFixture = new \T3Dev\Escortmodels\Domain\Model\BraSize();
		$this->subject->setBraSize($braSizeFixture);

		$this->assertAttributeEquals(
			$braSizeFixture,
			'braSize',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShoeSizeReturnsInitialValueForShoeSize()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getShoeSize()
		);
	}

	/**
	 * @test
	 */
	public function setShoeSizeForShoeSizeSetsShoeSize()
	{
		$shoeSizeFixture = new \T3Dev\Escortmodels\Domain\Model\ShoeSize();
		$this->subject->setShoeSize($shoeSizeFixture);

		$this->assertAttributeEquals(
			$shoeSizeFixture,
			'shoeSize',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAgeReturnsInitialValueForAge()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getAge()
		);
	}

	/**
	 * @test
	 */
	public function setAgeForAgeSetsAge()
	{
		$ageFixture = new \T3Dev\Escortmodels\Domain\Model\Age();
		$this->subject->setAge($ageFixture);

		$this->assertAttributeEquals(
			$ageFixture,
			'age',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTatoosReturnsInitialValueForValue()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getTatoos()
		);
	}

	/**
	 * @test
	 */
	public function setTatoosForValueSetsTatoos()
	{
		$tatoosFixture = new \T3Dev\Escortmodels\Domain\Model\Value();
		$this->subject->setTatoos($tatoosFixture);

		$this->assertAttributeEquals(
			$tatoosFixture,
			'tatoos',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPiercingReturnsInitialValueForValue()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getPiercing()
		);
	}

	/**
	 * @test
	 */
	public function setPiercingForValueSetsPiercing()
	{
		$piercingFixture = new \T3Dev\Escortmodels\Domain\Model\Value();
		$this->subject->setPiercing($piercingFixture);

		$this->assertAttributeEquals(
			$piercingFixture,
			'piercing',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSmokingReturnsInitialValueForValue()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getSmoking()
		);
	}

	/**
	 * @test
	 */
	public function setSmokingForValueSetsSmoking()
	{
		$smokingFixture = new \T3Dev\Escortmodels\Domain\Model\Value();
		$this->subject->setSmoking($smokingFixture);

		$this->assertAttributeEquals(
			$smokingFixture,
			'smoking',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLanguageReturnsInitialValueForLanguage()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getLanguage()
		);
	}

	/**
	 * @test
	 */
	public function setLanguageForObjectStorageContainingLanguageSetsLanguage()
	{
		$language = new \T3Dev\Escortmodels\Domain\Model\Language();
		$objectStorageHoldingExactlyOneLanguage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneLanguage->attach($language);
		$this->subject->setLanguage($objectStorageHoldingExactlyOneLanguage);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneLanguage,
			'language',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addLanguageToObjectStorageHoldingLanguage()
	{
		$language = new \T3Dev\Escortmodels\Domain\Model\Language();
		$languageObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$languageObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($language));
		$this->inject($this->subject, 'language', $languageObjectStorageMock);

		$this->subject->addLanguage($language);
	}

	/**
	 * @test
	 */
	public function removeLanguageFromObjectStorageHoldingLanguage()
	{
		$language = new \T3Dev\Escortmodels\Domain\Model\Language();
		$languageObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$languageObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($language));
		$this->inject($this->subject, 'language', $languageObjectStorageMock);

		$this->subject->removeLanguage($language);

	}

	/**
	 * @test
	 */
	public function getRateReturnsInitialValueForRate()
	{
		$this->assertEquals(
			NULL,
			$this->subject->getRate()
		);
	}

	/**
	 * @test
	 */
	public function setRateForRateSetsRate()
	{
		$rateFixture = new \T3Dev\Escortmodels\Domain\Model\Rate();
		$this->subject->setRate($rateFixture);

		$this->assertAttributeEquals(
			$rateFixture,
			'rate',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getColReturnsInitialValueForCol()
	{
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCol()
		);
	}

	/**
	 * @test
	 */
	public function setColForObjectStorageContainingColSetsCol()
	{
		$col = new \T3Dev\Escortmodels\Domain\Model\Col();
		$objectStorageHoldingExactlyOneCol = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCol->attach($col);
		$this->subject->setCol($objectStorageHoldingExactlyOneCol);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCol,
			'col',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addColToObjectStorageHoldingCol()
	{
		$col = new \T3Dev\Escortmodels\Domain\Model\Col();
		$colObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$colObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($col));
		$this->inject($this->subject, 'col', $colObjectStorageMock);

		$this->subject->addCol($col);
	}

	/**
	 * @test
	 */
	public function removeColFromObjectStorageHoldingCol()
	{
		$col = new \T3Dev\Escortmodels\Domain\Model\Col();
		$colObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$colObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($col));
		$this->inject($this->subject, 'col', $colObjectStorageMock);

		$this->subject->removeCol($col);

	}
}
