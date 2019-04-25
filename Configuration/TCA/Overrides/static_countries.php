<?php
defined('TYPO3_MODE') || die();

call_user_func(
    function ($extKey, $table)
    {
        $additionalFields = [
            'cn_short_en' => 'cn_short_pl',
            'cn_official_name_en' => 'cn_official_name_pl',
            'cn_capital' => 'cn_capital_pl',
            ];

        foreach ($additionalFields as $sourceField => $destinationField) {
            $additionalColumns = [];
            $additionalColumns[$destinationField] = $GLOBALS['TCA'][$table]['columns'][$sourceField];
            $additionalColumns[$destinationField]['label'] = 'LLL:EXT:' . $extKey . '/Resources/Private/Language/locallang_db.xlf:static_countries_item.' . $destinationField;
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($table, $additionalColumns);
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes($table, $destinationField, '', 'after:' . $sourceField);
            $GLOBALS['TCA'][$table]['ctrl']['searchFields'] .= ',' . $destinationField;
        }
    },
    'static_info_tables_pl', 'static_countries'
);
