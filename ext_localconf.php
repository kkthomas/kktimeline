<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Kktimeline.Kktimeline',
            'Kktimeline',
            [
                'Timeline' => 'list, show'
            ],
            // non-cacheable actions
            [
                'Timeline' => ''
            ]
        );

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
		'mod {
			wizards.newContentElement.wizardItems.plugins {
				elements {
					kktimeline {

						icon = '. \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath("kktimeline") . 'Resources/Public/Icons/user_plugin_kktimeline.svg
						title = LLL:EXT:kktimeline/Resources/Private/Language/locallang_db.xlf:tx_kk_timeline_domain_model_kktimeline
						description = LLL:EXT:kktimeline/Resources/Private/Language/locallang_db.xlf:tx_kk_timeline_domain_model_kktimeline.description
						tt_content_defValues {
							CType = list
							list_type = kktimeline_kktimeline
						}
					}
				}
				show = *
			}
	   }'
	);
    },
    $_EXTKEY
);
