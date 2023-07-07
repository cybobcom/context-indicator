<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Core\Environment;
use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

defined('TYPO3') or die();

(static function () {
    $_EXTKEY = 'context_indicator';
    $applicationContext = Environment::getContext();
    $extensionConfiguration = GeneralUtility::makeInstance(ExtensionConfiguration::class);
    $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
    $configuration = $extensionConfiguration->get($_EXTKEY);

    $context = 'production';
    $color = $configuration['colors'][$context] ?: 'var(--bs-danger)';

    if ($applicationContext->isTesting()) {
        $context = 'testing';
        $color = $configuration['colors'][$context] ?: 'var(--bs-info)';
    } elseif ($applicationContext->isDevelopment()) {
        $context = 'development';
        $color = $configuration['colors'][$context] ?: 'var(--bs-success)';
    }

    // add application context information
    if ($configuration['showProduction'] || $context !== 'production') {
        $contextIndicator = str_ireplace(
            '{{ CONTEXT }}',
            (string)$applicationContext,
            trim($configuration['template'])
        );

        if ($configuration['type'] === 'prefix') {
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] = $contextIndicator . ' ' . $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'];
        } else {
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['sitename'] .= ' ' . $contextIndicator;
        }

        // add topbar border
        $pageRenderer->addCssInlineBlock(
            'context_indicator',
            '.topbar-header.t3js-topbar-header, .toolbar-list {border-bottom: 5px solid ' . $color . ';}'
        );
    }
})();
