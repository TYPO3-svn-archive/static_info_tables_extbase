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
 * the static country model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_StaticInfoTablesExtbase_Domain_Model_StaticCountry extends Tx_Extbase_DomainObject_AbstractEntity {
	/**
	 * @var string
	 */
	protected $shortName = '';

	/**
	 * @var string
	 */
	protected $shortNameLocal = '';

	/**
	 * @var string
	 */
	protected $officialName = '';

	/**
	 * @var string
	 */
	protected $officialNameLocal = '';

	/**
	 * @var string
	 */
	protected $capital = '';

	/**
	 * Country code as number (i.e. 40)
	 * @var integer ISO 3166-1 Nr Country code
	 */
	protected $isoCodeNumber = 0;

	/**
	 * Country code as two digit string (i.e. AT)
	 * @var string ISO 3166-1 A2 Country code
	 */
	protected $isoCodeA2 = '';

	/**
	 * Country code as three digit string (i.e. AUT)
	 * @var string ISO 3166-1 A3 Country code
	 */
	protected $isoCodeA3 = '';

	/**
	 * Currency code as number (i.e. 978)
	 * @var integer ISO 4217 Nr Currency code
	 */
	protected $currencyCodeNumber = 0;

	/**
	 * Currency code as three digit string (i.e. EUR)
	 * @var string ISO 4217 A3 Currency code
	 */
	protected $currencyCode = '';

	/**
	 * @var integer
	 */
	protected $parentTerritoryCode = 0;

	/**
	 * @var boolean
	 */
	protected $unMember = FALSE;

	/**
	 * @var boolean
	 */
	protected $euMember = FALSE;

	/**
	 * @var integer
	 */
	protected $phonePrefix = 0;

	/**
	 * @var string
	 */
	protected $topLevelDomain = '';

	/**
	 * @var string
	 */
	protected $addressFormat = '';

	/**
	 * @var boolean
	 */
	protected $zoneFlag = FALSE;


	/**
	 * Sets the address format.
	 *
	 * @param string $addressFormat
	 *
	 * @return void
	 */
	public function setAddressFormat($addressFormat) {
		$this->addressFormat = $addressFormat;
	}

	/**
	 * Gets the address format.
	 *
	 * @return string
	 */
	public function getAddressFormat() {
		return $this->addressFormat;
	}

	/**
	 * Sets the name of the capital.
	 *
	 * @param string $capital
	 *
	 * @return void
	 */
	public function setCapital($capital) {
		$this->capital = $capital;
	}

	/**
	 * Gets the name of the capital.
	 *
	 * @return string
	 */
	public function getCapital() {
		return $this->capital;
	}

	/**
	 * Sets the currency code.
	 *
	 * @param string $currencyCode
	 *
	 * @return void
	 */
	public function setCurrencyCode($currencyCode) {
		$this->currencyCode = $currencyCode;
	}

	/**
	 * Gets the currency code.
	 *
	 * @return string
	 */
	public function getCurrencyCode() {
		return $this->currencyCode;
	}

	/**
	 * Sets the currency code number.
	 *
	 * @param integer $currencyCodeNumber
	 *
	 * @return void
	 */
	public function setCurrencyCodeNumber($currencyCodeNumber) {
		$this->currencyCodeNumber = $currencyCodeNumber;
	}

	/**
	 * Gets the currency code number.
	 *
	 * @return integer
	 */
	public function getCurrencyCodeNumber() {
		return $this->currencyCodeNumber;
	}

	/**
	 * Sets whether this country is a member of the European Union.
	 *
	 * @param boolean $euMember
	 *
	 * @return void
	 */
	public function setEuMember($euMember) {
		$this->euMember = $euMember;
	}

	/**
	 * Gets whether this country is a member of the European Union.
	 *
	 * @return boolean
	 */
	public function getEuMember() {
		return $this->euMember;
	}

	/**
	 * Gets whether this country is a member of the European Union.
	 *
	 * This method is a synonym for the getEuMember method.
	 *
	 * @return boolean
	 */
	public function isEuMember() {
		return $this->getEuMember();
	}

	/**
	 * Sets the ISO alpha-2 code.
	 *
	 * @param string $isoCodeA2
	 *
	 * @return void
	 */
	public function setIsoCodeA2($isoCodeA2) {
		$this->isoCodeA2 = $isoCodeA2;
	}

	/**
	 * Gets the ISO alpha-2 code.
	 *
	 * @return string
	 */
	public function getIsoCodeA2() {
		return $this->isoCodeA2;
	}

	/**
	 * Sets the ISO alpha-3 code.
	 *
	 * @param string $isoCodeA3
	 *
	 * @return void
	 */
	public function setIsoCodeA3($isoCodeA3) {
		$this->isoCodeA3 = $isoCodeA3;
	}

	/**
	 * Gets the ISO alpha-3 code.
	 *
	 * @return string
	 */
	public function getIsoCodeA3() {
		return $this->isoCodeA3;
	}

	/**
	 * Sets the ISO code number.
	 *
	 * @param integer $isoCodeNumber
	 *
	 * @return void
	 */
	public function setIsoCodeNumber($isoCodeNumber) {
		$this->isoCodeNumber = $isoCodeNumber;
	}

	/**
	 * Gets the ISO code number.
	 *
	 * @return integer
	 */
	public function getIsoCodeNumber() {
		return $this->isoCodeNumber;
	}

	/**
	 * Sets the official name.
	 *
	 * @param string $officialName
	 *
	 * @return void
	 */
	public function setOfficialName($officialName) {
		$this->officialName = $officialName;
	}

	/**
	 * Gets the official name.
	 *
	 * @return string
	 */
	public function getOfficialName() {
		return $this->officialName;
	}

	/**
	 * Sets the official local name.
	 *
	 * @param string $officialNameLocal
	 *
	 * @return void
	 */
	public function setOfficialNameLocal($officialNameLocal) {
		$this->officialNameLocal = $officialNameLocal;
	}

	/**
	 * Gets the official local name.
	 *
	 * @return string
	 */
	public function getOfficialNameLocal() {
		return $this->officialNameLocal;
	}

	/**
	 * Sets the parent territory code.
	 *
	 * @param integer $parentTerritoryCode
	 *
	 * @return void
	 */
	public function setParentTerritoryCode($parentTerritoryCode) {
		$this->parentTerritoryCode = $parentTerritoryCode;
	}

	/**
	 * Gets the parent territory code.
	 *
	 * @return integer
	 */
	public function getParentTerritoryCode() {
		return $this->parentTerritoryCode;
	}

	/**
	 * Sets the phone prefix.
	 *
	 * @param integer $phonePrefix
	 *
	 * @return void
	 */
	public function setPhonePrefix($phonePrefix) {
		$this->phonePrefix = $phonePrefix;
	}

	/**
	 * Gets the phone prefix.
	 *
	 * @return integer
	 */
	public function getPhonePrefix() {
		return $this->phonePrefix;
	}

	/**
	 * Sets the short name.
	 *
	 * @param string $shortName
	 *
	 * @return void
	 */
	public function setShortName($shortName) {
		$this->shortName = $shortName;
	}

	/**
	 * Gets the short name.
	 *
	 * @return string
	 */
	public function getShortName() {
		return $this->shortName;
	}

	/**
	 * Sets the short local name.
	 *
	 * @param string $shortNameLocal
	 *
	 * @return void
	 */
	public function setShortNameLocal($shortNameLocal) {
		$this->shortNameLocal = $shortNameLocal;
	}

	/**
	 * Gets the short local name.
	 *
	 * @return string
	 */
	public function getShortNameLocal() {
		return $this->shortNameLocal;
	}

	/**
	 * Sets the top-level domain.
	 *
	 * @param string $topLevelDomain
	 *
	 * @return void
	 */
	public function setTopLevelDomain($topLevelDomain) {
		$this->topLevelDomain = $topLevelDomain;
	}

	/**
	 * Gets the top-level domain.
	 *
	 * @return string
	 */
	public function getTopLevelDomain() {
		return $this->topLevelDomain;
	}

	/**
	 * Sets whether this country is a member of the United Nations.
	 *
	 * @param boolean $unMember
	 *
	 * @return void
	 */
	public function setUnMember($unMember) {
		$this->unMember = $unMember;
	}

	/**
	 * Gets whether this country is a member of the United Nations.
	 *
	 * @return boolean
	 */
	public function getUnMember() {
		return $this->unMember;
	}

	/**
	 * Sets whether this country is a member of the United Nations.
	 *
	 * This method is a synonym for the getUnMember method.
	 *
	 * @return boolean
	 */
	public function isUnMember() {
		return $this->getUnMember();
	}

	/**
	 * Sets the zone flag.
	 *
	 * @param boolean $zoneFlag
	 *
	 * @return void
	 */
	public function setZoneFlag($zoneFlag) {
		$this->zoneFlag = $zoneFlag;
	}

	/**
	 * Gets the zone flag.
	 *
	 * @return boolean
	 */
	public function getZoneFlag() {
		return $this->zoneFlag;
	}
}
?>