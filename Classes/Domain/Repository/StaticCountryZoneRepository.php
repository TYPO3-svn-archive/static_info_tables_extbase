<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2011 Armin Ruediger Vieweg <info@professorweb.de>
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
 * Repository for Tx_StaticInfoTablesExtbase_Domain_Model_StaticCountryZone
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 */
class Tx_StaticInfoTablesExtbase_Domain_Repository_StaticCountryZoneRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * Finds static country zone by static country
	 *
	 * @param Tx_StaticInfoTablesExtbase_Domain_Model_StaticCountry $country
	 *
	 * @return void
	 */
	public function findByCountry(Tx_StaticInfoTablesExtbase_Domain_Model_StaticCountry $country) {
		$query = $this->createQuery();
		$query->matching(
			$query->equals('zn_country_iso_nr', $country->getIsoCodeNumber())
		);
		return $query->execute();
	}
}
?>