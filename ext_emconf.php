<?php

$EM_CONF[$_EXTKEY] = array (
	'title' => 'File info',
	'description' => 'Adds infos to linked files in your website (filetype and -size).',
	'category' => 'fe',
	'version' => '11.5.0',
	'state' => 'stable',
	'author' => 'Peter Benke',
	'author_email' => 'info@typomotor.de',
	'author_company' => null,
	'constraints' =>[
		'depends' => [
			'typo3' => '11.5.0-11.5.99',
		],
	],
);
