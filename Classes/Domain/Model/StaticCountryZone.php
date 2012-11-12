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
 * the static country zone model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_StaticInfoTablesExtbase_Domain_Model_StaticCountryZone extends Tx_Extbase_DomainObject_AbstractEntity {
	/**
	 * @var string
	 */
	protected $localName = '';

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * Country zone code as string
	 * @var string ISO 3166-2 Country Zone code
	 */
	protected $isoCode = '';

	/**
	 * Country code as number (i.e. 40)
	 * @var integer ISO 3166-1 Nr Country code
	 */
	protected $countryIsoCodeNumber = 0;

	/**
	 * Country code as two digit string (i.e. AT)
	 * @var string ISO 3166-1 A2 Country code
	 */
	protected $countryIsoCodeA2 = '';

	/**
	 * Country code as three digit string (i.e. AUT)
	 * @var string ISO 3166-1 A3 Country code
	 */
	protected $countryIsoCodeA3 = '';

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
	 * Returns name. If empty returns the localName.
	 *
	 * @return string
	 */
	public function getName() {
		if ($this->name === '') {
			return $this->getLocalName();
		}
		return $this->name;
	}

	/**
	 * Sets the ISO alpha-2 code.
	 *
	 * @param string $countryIsoCodeA2
	 *
	 * @return void
	 */
	public function setCountryIsoCodeA2($countryIsoCodeA2) {
		$this->countryIsoCodeA2 = $countryIsoCodeA2;
	}

	/**
	 * Gets the ISO alpha-2 code.
	 *
	 * @return string
	 */
	public function getCountryIsoCodeA2() {
		return $this->countryIsoCodeA2;
	}

	/**
	 * Sets the ISO alpha-3 code.
	 *
	 * @param string $countryIsoCodeA3
	 *
	 * @return void
	 */
	public function setCountryIsoCodeA3($countryIsoCodeA3) {
		$this->countryIsoCodeA3 = $countryIsoCodeA3;
	}

	/**
	 * Gets the ISO alpha-2 code.
	 *
	 * @return string
	 */
	public function getCountryIsoCodeA3() {
		return $this->countryIsoCodeA3;
	}

	/**
	 * Sets the county ISO code number.
	 *
	 * @param integer $countryIsoCodeNumber
	 *
	 * @return void
	 */
	public function setCountryIsoCodeNumber($countryIsoCodeNumber) {
		$this->countryIsoCodeNumber = $countryIsoCodeNumber;
	}

	/**
	 * Gets the county ISO code number.
	 *
	 * @return integer
	 */
	public function getCountryIsoCodeNumber() {
		return $this->countryIsoCodeNumber;
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
}
?>