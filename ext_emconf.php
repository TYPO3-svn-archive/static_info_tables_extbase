<?php

########################################################################
# Extension Manager/Repository config file for ext "static_info_tables_extbase".
#
# Auto generated 21-09-2011 14:48
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Static Info Tables for Extbase',
	'description' => 'Provides models and repositories to use the static info tables in Extbase and Fluid.',
	'category' => 'misc',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 'extbase,fluid,static_info_tables',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Armin Ruediger Vieweg',
	'author_email' => 'info@professorweb.de',
	'author_company' => 'Professor Web',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
			'extbase' => '1.3.0-0.0.0',
			'fluid' => '1.3.0-0.0.0',
			'static_info_tables' => '2.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:17:{s:12:"ext_icon.gif";s:4:"b835";s:17:"ext_localconf.php";s:4:"a096";s:14:"ext_tables.php";s:4:"a096";s:14:"ext_tables.sql";s:4:"d41d";s:24:"ext_typoscript_setup.txt";s:4:"3dcf";s:38:"Classes/Domain/Model/StaticCountry.php";s:4:"3ad2";s:42:"Classes/Domain/Model/StaticCountryZone.php";s:4:"b96f";s:39:"Classes/Domain/Model/StaticCurrency.php";s:4:"b034";s:39:"Classes/Domain/Model/StaticLanguage.php";s:4:"6f1b";s:40:"Classes/Domain/Model/StaticTerritory.php";s:4:"8d4a";s:59:"Classes/Domain/Repository/AbstractStaticEntryRepository.php";s:4:"04ad";s:53:"Classes/Domain/Repository/StaticCountryRepository.php";s:4:"6799";s:57:"Classes/Domain/Repository/StaticCountryZoneRepository.php";s:4:"07ee";s:54:"Classes/Domain/Repository/StaticCurrencyRepository.php";s:4:"ef5c";s:54:"Classes/Domain/Repository/StaticLanguageRepository.php";s:4:"e8b7";s:55:"Classes/Domain/Repository/StaticTerritoryRepository.php";s:4:"f536";s:14:"doc/manual.sxw";s:4:"e810";}',
	'suggests' => array(
	),
);

?>