<?php

declare(strict_types=1);

namespace JulianHofmann\Sitepackage\Event\Listener;

use B13\Menus\Event\PopulatePageInformationEvent;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;
use TYPO3\CMS\Frontend\Typolink\PageLinkBuilder;

/**
 * Helper that adds a "._link" to the values of all menu items, so they can be cached.
 * Useful if you render Fluid templates with a mega menu.
 */
class AddLinkToMenuItemsEventListener
{
    public function __invoke(PopulatePageInformationEvent $event): void
    {
        try {
            $page = $event->getPage();
            $pageLinkBuilder = $this->getPageLinkBuilder();
            $linkDetails = ['pageuid' => $page['uid']];
            $linkConfiguration = ['language' => $page['sys_language_uid']];
            $linkResult = $pageLinkBuilder->build($linkDetails, '', '', $linkConfiguration);
            $page['_link'] = $linkResult->getUrl();
            $event->setPage($page);
        } catch (\Throwable $e) {
            // do not do anything
        }
    }

    protected function getPageLinkBuilder(): ?PageLinkBuilder
    {
        $tsfe = $this->getTypoScriptFrontendController();
        if (!$tsfe) {
            return null;
        }
        return GeneralUtility::makeInstance(PageLinkBuilder::class, $tsfe->cObj, $tsfe);
    }

    protected function getTypoScriptFrontendController(): ?TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'] ?? null;
    }
}
