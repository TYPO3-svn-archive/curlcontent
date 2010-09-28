<?php

########################################################################
# Extension Manager/Repository config file for ext "curlcontent".
#
# Auto generated 28-09-2010 13:19
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'CurlContent',
	'description' => 'import content from external source with curl',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.2',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'beta',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Bernie Maier',
	'author_email' => 'maier@tum.de',
	'author_company' => 'TUM',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '5.2.0-0.0.0',
			'typo3' => '4.3.dev-4.4.99',
			'extbase' => '0.0.0-0.0.0',
			'fluid' => '0.0.0-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:8:{s:15:"democontent.php";s:4:"8ef7";s:21:"ext_conf_template.txt";s:4:"1491";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"9c7c";s:14:"ext_tables.php";s:4:"9fb9";s:40:"Classes/Controller/ContentController.php";s:4:"3361";s:39:"Configuration/FlexForms/flexform_cc.xml";s:4:"436f";s:43:"Resources/Private/Language/locallang_cc.xml";s:4:"a175";}',
);

?>