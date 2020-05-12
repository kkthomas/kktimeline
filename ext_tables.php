<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'Kktimeline.KkTimeline',
            'Kktimeline',
            'Timeline'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile("kktimeline", 'Configuration/TypoScript', 'KK Timeline');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_kktimeline_domain_model_timeline', 'EXT:kk_timeline/Resources/Private/Language/locallang_csh_tx_kktimeline_domain_model_timeline.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kktimeline_domain_model_timeline');

    },
    $_EXTKEY
);
