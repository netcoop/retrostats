<?php

########################################################################
# Extension Manager/Repository config file for ext "retrostats".
#
# Auto generated 15-06-2015 12:23
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Retro Statistics - Re-introduce logfile apache style',
	'description' => 'Re-introduces the good old apache-style logfile written by TYPO3. This should make extensions like AWstats work again with TYPO3 versions 6 and higher. Place the [FE][logfile_dir] setting in AdditionalConfiguration.php instead of LocalConfiguration!',
	'category' => 'fe',
	'author' => 'Loek Hilgersom',
	'author_email' => 'typo3extensions@netcoop.nl',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.1.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.21-8.7.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => '',
);

?>
