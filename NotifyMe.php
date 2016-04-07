<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( 'NotifyMe' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['NotifyMe'] = __DIR__ . '/i18n';
	$wgExtensionMessagesFiles['NotifyMeAlias'] = __DIR__ . '/NotifyMe.i18n.alias.php';
	wfWarn(
		'Deprecated PHP entry point used for NotifyMe extension. Please use wfLoadExtension instead'
	);
	return true;
} else {
	die( 'This version of the NotifyMe extension requires MediaWiki 1.25+' );
}
