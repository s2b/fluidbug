<?php
defined('TYPO3') or die();

call_user_func(function()
{
   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
      'fluidbug',
      'setup',
      "@import 'EXT:fluidbug/Configuration/TypoScript/setup.typoscript'"
   );
});
