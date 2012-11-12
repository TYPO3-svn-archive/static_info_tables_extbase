<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011-2012 Armin Rüdiger Vieweg <info@professorweb.de>
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
 * the static language model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_StaticInfoTablesExtbase_Domain_Model_StaticLanguage extends Tx_Extbase_DomainObject_AbstractEntity {
	/**
	 * @var string
	 */
	protected $localName = '';

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var string ISO 639-1 A2 Language code
	 */
	protected $countryIsoCode = '';

	/**
	 * @var string
	 */
	protected $typo3Code = '';

	/**
	 * @var string
	 */
	protected $isoCode = '';

	/**
	 * @var string
	 */
	protected $collatingLocale = '';

	/**
	 * @var boolean
	 */
	protected $sacredLanguage = FALSE;

	/**
	 * @var boolean
	 */
	protected $constructedLanguage = FALSE;

	/**
	 * Sets the TYPO3 code.
	 *
	 * @param string $typo3Code
	 *
	 * @return void
	 */
	public function setTypo3Code($typo3Code) {
		$this->typo3Code = $typo3Code;
	}

	/**
	 * Gets the TYPO3 code.
	 *
	 * @return string
	 */
	public function getTypo3Code() {
		return $this->typo3Code;
	}

	/**
	 * Sets the collating locale.
	 *
	 * @param string $collatingLocale
	 *
	 * @return void
	 */
	public function setCollatingLocale($collatingLocale) {
		$this->collatingLocale = $collatingLocale;
	}

	/**
	 * Gets the collating locale.
	 *
	 * @return string
	 */
	public function getCollatingLocale() {
		return $this->collatingLocale;
	}

	/**
	 * Sets whether this is a constructed language.
	 *
	 * @param boolean $constructedLanguage
	 *
	 * @return void
	 */
	public function setConstructedLanguage($constructedLanguage) {
		$this->constructedLanguage = $constructedLanguage;
	}

	/**
	 * Gets whether this is a constructed language.
	 *
	 * @return boolean
	 */
	public function getConstructedLanguage() {
		return $this->constructedLanguage;
	}

	/**
	 * Gets whether this is a constructed language.
	 *
	 * This method is a synonym for the getConstructedLanguage method.
	 *
	 * @return boolean
	 */
	public function isConstructedLanguage() {
		return $this->getConstructedLanguage();
	}

	/**
	 * Sets the ISO code.
	 *
	 * @param string $isoCode
	 *
	 * @return void
	 */
	public function setIsoCode($isoCode) {
		$this->isoCode = $isoCode;
	}

	/**
	 * Gets the ISO code.
	 *
	 * @return string
	 */
	public function getIsoCode() {
		return $this->isoCode;
	}

	/**
	 * Sets the country ISO code.
	 *
	 * @param string $countryIsoCode
	 *
	 * @return void
	 */
	public function setCountryIsoCode($countryIsoCode) {
		$this->countryIsoCode = $countryIsoCode;
	}

	/**
	 * Gets the country ISO code.
	 *
	 * @return string
	 */
	public function getCountryIsoCode() {
		return $this->countryIsoCode;
	}

	/**
	 * Sets the local name.
	 *
	 * @param string $localName
	 *
	 * @return void
	 */
	public function setLocalName($localName) {
		$this->localName = $localName;
	}

	/**
	 * Gets the local name.
	 *
	 * @return string
	 */
	public function getLocalName() {
		return $this->localName;
	}

	/**
	 * Sets the name.
	 *
	 * @param string $name
	 *
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Gets the name.
	 *
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets whether this is a sacred language.
	 *
	 * @param boolean $sacredLanguage
	 *
	 * @return void
	 */
	public function setSacredLanguage($sacredLanguage) {
		$this->sacredLanguage = $sacredLanguage;
	}

	/**
	 * Gets whether this is a sacred language.
	 *
	 * @return boolean
	 */
	public function getSacredLanguage() {
		return $this->sacredLanguage;
	}

	/**
	 * Sets whether this is a sacred language.
	 *
	 * This method is a synonym for the getSacredLanguage method.
	 *
	 * @return boolean
	 */
	public function isSacredLanguage() {
		return $this->getSacredLanguage();
	}
}
?>