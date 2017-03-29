<?php
namespace T3Dev\Escortmodels\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
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
 * FileReference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference {

	/**
	 * uidLocal
	 *
	 * @var integer
	 */
	protected $uidLocal = 0;

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * alternative
	 *
	 * @var string
	 */
	protected $alternative = '';

	/**
	 * link
	 *
	 * @var string
	 */
	protected $link = '';
	
	/**
	 * logomargin
	 *
	 * @var string
	 */
	protected $logomargin = '';	

	/**
	 * showinpreview
	 *
	 * @var boolean
	 */
	protected $showinpreview = FALSE;
	
	/**
	 * dontshowlogo
	 *
	 * @var boolean
	 */
	protected $dontshowlogo = FALSE;	

	/**
	 * Returns the uidLocal
	 *
	 * @return integer $uidLocal
	 */
	public function getUidLocal() {
		return $this->uidLocal;
	}

	/**
	 * Sets the uidLocal
	 *
	 * @param integer $uidLocal
	 * @return void
	 */
	public function setUidLocal($uidLocal) {
		$this->uidLocal = $uidLocal;
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the alternative
	 *
	 * @return string $alternative
	 */
	public function getAlternative() {
		return $this->alternative;
	}

	/**
	 * Sets the alternative
	 *
	 * @param string $alternative
	 * @return void
	 */
	public function setAlternative($alternative) {
		$this->alternative = $alternative;
	}

	/**
	 * Returns the link
	 *
	 * @return string $link
	 */
	public function getLink() {
		return $this->link;
	}

	/**
	 * Sets the link
	 *
	 * @param string $link
	 * @return void
	 */
	public function setLink($link) {
		$this->link = $link;
	}

	/**
	 * Returns the showinpreview
	 *
	 * @return boolean $showinpreview
	 */
	public function getShowinpreview() {
		return $this->showinpreview;
	}

	/**
	 * Sets the showinpreview
	 *
	 * @param boolean $showinpreview
	 * @return void
	 */
	public function setShowinpreview($showinpreview) {
		$this->showinpreview = $showinpreview;
	}

	/**
	 * Returns the boolean state of showinpreview
	 *
	 * @return boolean
	 */
	public function isShowinpreview() {
		return $this->showinpreview;
	}
	
	
	/**
	 * Returns the logomargin
	 *
	 * @return boolean $logomargin
	 */
	public function getLogomargin() {
		return $this->logomargin;
	}
	
	/**
	 * Sets the logomargin
	 *
	 * @param boolean $logomargin
	 * @return void
	 */
	public function setLogomargin($logomargin) {
		$this->logomargin = $logomargin;
	}
		
	/**
	 * Returns the dontshowlogo
	 *
	 * @return boolean $dontshowlogo
	 */
	public function getDontshowlogo() {
		return $this->dontshowlogo;
	}
	
	/**
	 * Sets the dontshowlogo
	 *
	 * @param boolean $dontshowlogo
	 * @return void
	 */
	public function setDontshowlogo($dontshowlogo) {
		$this->dontshowlogo = $dontshowlogo;
	}
	
	/**
	 * Returns the boolean state of dontshowlogo
	 *
	 * @return boolean
	 */
	public function isDontshowlogo() {
		return $this->dontshowlogo;
	}	

}