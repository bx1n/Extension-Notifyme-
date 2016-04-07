<?php

class SpecialNotifyMe extends SpecialPage {
	public function __construct() {
		parent::__construct( 'NotifyMe' );
	}


	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( 'notifyme-notify' ) );

		$out->addHelpLink( 'How to become a MediaWiki hacker' );
		$out->addWikiMsg('notifyme-welcome');


		$out->addWikiMsg( 'notifyme-notify-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
