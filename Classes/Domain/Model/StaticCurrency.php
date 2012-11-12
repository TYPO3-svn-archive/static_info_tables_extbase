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
 * the static currency model
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_StaticInfoTablesExtbase_Domain_Model_StaticCurrency extends Tx_Extbase_DomainObject_AbstractEntity {
	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * Currency code as number
	 * @var integer ISO 4217 Nr Currency code
	 */
	protected $isoCodeNumber = 0;

	/**
	 * Currency code as three digit string (i.e. EUR)
	 * @var string ISO 4217 A3 Currency code
	 */
	protected $isoCodeA3 = '';

	/**
	 * @var string
	 */
	protected $symbolLeft = '';

	/**
	 * @var string
	 */
	protected $symbolRight = '';

	/**
	 * @var string
	 */
	protected $thousandsPoint = '';

	/**
	 * @var string
	 */
	protected $decimalPoint = '';

	/**
	 * @var string
	 */
	protected $subName = '';

	/**
	 * @var string
	 */
	protected $subSymbolLeft = '';

	/**
	 * @var string
	 */
	protected $subSymbolRight = '';

	/**
	 * @var integer
	 */
	protected $decimalDigits = 0;

	/**
	 * @var integer
	 */
	protected $divisor = 0;

	/**
	 * Sets the thousands point/separator.
	 *
	 * @param string $thousandsPoint
	 *
	 * @return void
	 */
	public function setThousandsPoint($thousandsPoint) {
		$this->thousandsPoint = $thousandsPoint;
	}

	/**
	 * Gets the thousands point/separator.
	 *
	 * @return string
	 */
	public function getThousandsPoint() {
		return $this->thousandsPoint;
	}

	/**
	 * Sets the divisor.
	 *
	 * @param integer $divisor
	 *
	 * @return void
	 */
	public function setDivisor($divisor) {
		$this->divisor = $divisor;
	}

	/**
	 * Gets the divisor.
	 *
	 * @return integer
	 */
	public function getDivisor() {
		return $this->divisor;
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
	 * Sets the sub-name.
	 *
	 * @param string $subName
	 *
	 * @return void
	 */
	public function setSubName($subName) {
		$this->subName = $subName;
	}

	/**
	 * Gets the sub-name.
	 *
	 * @return string
	 */
	public function getSubName() {
		return $this->subName;
	}

	/**
	 * Sets the sub-symbol for the left-hand side.
	 *
	 * @param string $subSymbolLeft
	 *
	 * @return void
	 */
	public function setSubSymbolLeft($subSymbolLeft) {
		$this->subSymbolLeft = $subSymbolLeft;
	}

	/**
	 * Gets the sub-symbol for the left-hand side.
	 *
	 * @return string
	 */
	public function getSubSymbolLeft() {
		return $this->subSymbolLeft;
	}

	/**
	 * Sets the sub-symbol for the right-hand side.
	 *
	 * @param string $subSymbolRight
	 *
	 * @return void
	 */
	public function setSubSymbolRight($subSymbolRight) {
		$this->subSymbolRight = $subSymbolRight;
	}

	/**
	 * Gets the sub-symbol for the right-hand side.
	 *
	 * @return string
	 */
	public function getSubSymbolRight() {
		return $this->subSymbolRight;
	}

	/**
	 * Sets the symbol for the left-hand side.
	 *
	 * @param string $symbolLeft
	 *
	 * @return void
	 */
	public function setSymbolLeft($symbolLeft) {
		$this->symbolLeft = $symbolLeft;
	}

	/**
	 * Gets the symbol for the left-hand side.
	 *
	 * @return string
	 */
	public function getSymbolLeft() {
		return $this->symbolLeft;
	}

	/**
	 * Sets the symbol for the right-hand side.
	 *
	 * @param string $symbolRight
	 *
	 * @return void
	 */
	public function setSymbolRight($symbolRight) {
		$this->symbolRight = $symbolRight;
	}

	/**
	 * Gets the symbol for the right-hand side.
	 *
	 * @return string
	 */
	public function getSymbolRight() {
		return $this->symbolRight;
	}

	/**
	 * Sets the number of decimal digits.
	 *
	 * @param integer $decimalDigits
	 *
	 * @return void
	 */
	public function setDecimalDigits($decimalDigits) {
		$this->decimalDigits = $decimalDigits;
	}

	/**
	 * Gets the number of decimal digits.
	 *
	 * @return integer
	 */
	public function getDecimalDigits() {
		return $this->decimalDigits;
	}

	/**
	 * Sets the decimal point.
	 *
	 * @param string $decimalPoint
	 *
	 * @return void
	 */
	public function setDecimalPoint($decimalPoint) {
		$this->decimalPoint = $decimalPoint;
	}

	/**
	 * Gets the decimal point.
	 *
	 * @return string
	 */
	public function getDecimalPoint() {
		return $this->decimalPoint;
	}
}
?>