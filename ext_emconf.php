<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "static_info_tables_extbase".
 *
 * Auto generated 18-02-2014 16:45
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables for Extbase',
	'description' => 'Provides models and repositories to use the static info tables in extbase and fluid for TYPO3 4.x',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.2.0',
	'dependencies' => 'static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'armin@v.ieweg.de',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-4.7.99',
			'static_info_tables' => '2.0.0-2.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:12:"ext_icon.gif";s:4:"b835";s:17:"ext_localconf.php";s:4:"0643";s:14:"ext_tables.php";s:4:"0643";s:14:"ext_tables.sql";s:4:"d41d";s:24:"ext_typoscript_setup.txt";s:4:"6cdb";s:38:"Classes/Domain/Model/StaticCountry.php";s:4:"5510";s:42:"Classes/Domain/Model/StaticCountryZone.php";s:4:"346b";s:39:"Classes/Domain/Model/StaticCurrency.php";s:4:"e87b";s:39:"Classes/Domain/Model/StaticLanguage.php";s:4:"6032";s:40:"Classes/Domain/Model/StaticTerritory.php";s:4:"be6e";s:59:"Classes/Domain/Repository/AbstractStaticEntryRepository.php";s:4:"595f";s:53:"Classes/Domain/Repository/StaticCountryRepository.php";s:4:"8636";s:57:"Classes/Domain/Repository/StaticCountryZoneRepository.php";s:4:"763d";s:54:"Classes/Domain/Repository/StaticCurrencyRepository.php";s:4:"56c3";s:54:"Classes/Domain/Repository/StaticLanguageRepository.php";s:4:"c13c";s:55:"Classes/Domain/Repository/StaticTerritoryRepository.php";s:4:"b93b";s:14:"doc/manual.sxw";s:4:"7418";}',
	'suggests' => array(
	),
);

?>