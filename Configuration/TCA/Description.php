<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_dpnglossary_domain_model_description'] = array(
	'ctrl' => $TCA['tx_dpnglossary_domain_model_description']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'hidden, meaning, text',
	),
	'types' => array(
		'1' => array('showitem' => 'meaning, text;;;richtext:rte_transform[mode=ts_links]'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0),
				),
			),
		),
		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'term' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),
		'meaning' => array(
			'exclude' => 0,
			'label' => 'LLL:EXT:dpn_glossary/Resources/Private/Language/locallang.xlf:tx_dpnglossary_domain_model_description.meaning',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim,required',
			),
		),
		'text' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:dpn_glossary/Resources/Private/Language/locallang.xlf:tx_dpnglossary_domain_model_description.text',
			'config' => array(
				'type' => 'text',
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
				'wizards' => array(
					'RTE' => array(
						'icon' => 'wizard_rte2.gif',
						'notNewRecords' => 1,
						'RTEonly' => 1,
						'module' => array(
							'name' => 'wizard_rte'
						),
						'title' => 'LLL:EXT:cms/locallang_ttc.xlf:bodytext.W.RTE',
						'type' => 'script',
					),
				),
			),
			'defaultExtras' => 'richtext[]'
		),
	),
);
