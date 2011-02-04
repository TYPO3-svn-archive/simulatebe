<?php

########################################################################
# Extension Manager/Repository config file for ext "simulatebe".
#
# Auto generated 04-02-2011 09:38
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'BE Login Simulation for FE Users',
	'description' => 'Simulates BE Login for FE Users. With this extension you can grant Frontend Users Backend User Rights. This means that, if a Frontend User logs into the Frontend and he has the proper rights, the Edit Icons will be displayed allowing him to edit the Content.',
	'category' => 'fe',
	'shy' => 0,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'doNotLoadInFE' => 0,
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => 'fe_users,be_users',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Sonja Scholz',
	'author_email' => 'ss@cabag.ch',
	'author_company' => 'cab services ag',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'version' => '2.0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '3.5.0-0.0.0',
			'php' => '3.0.0-0.0.0',
			'cms' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:13:{s:9:"ChangeLog";s:4:"a092";s:11:"Licence.txt";s:4:"3555";s:12:"ext_icon.gif";s:4:"a696";s:17:"ext_localconf.php";s:4:"1ca8";s:14:"ext_tables.php";s:4:"3366";s:14:"ext_tables.sql";s:4:"02ac";s:28:"ext_typoscript_constants.txt";s:4:"f265";s:24:"ext_typoscript_setup.txt";s:4:"c24f";s:16:"locallang_db.xml";s:4:"97c4";s:14:"doc/manual.sxw";s:4:"383d";s:19:"doc/wizard_form.dat";s:4:"ebe7";s:20:"doc/wizard_form.html";s:4:"9c48";s:31:"pi1/class.tx_simulatebe_pi1.php";s:4:"9b90";}',
	'suggests' => array(
	),
);

?>