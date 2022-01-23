<?php

# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}

wfLoadExtension( 'TabberNeue' );
wfLoadExtension( 'TreeAndMenu' );
wfLoadExtension( 'Tabs' );
wfLoadExtension( 'DisplayTitle' );

$wgTreeAndMenuPersistIfId = true;
$wgAllowDisplayTitle = true;
$wgDisplayTitleHideSubtitle = true;
$wgRestrictDisplayTitle = false;

$wgHooks['BeforePageDisplay'][] = function( $out, $skin ) {
	$title = Title::newFromText( 'SidebarTree', NS_MEDIAWIKI );
	$page = WikiPage::factory( $title );
	$html = $out->parseAsContent( $page->getContent()->getNativeData() );
	$out->addHTML( "<div id=\"wikitext-sidebar\">$html</div>" );
	return true;
};

#::END::
