<?php

class SpecialNotifyMe extends SpecialPage {
	public function __construct() {
		parent::__construct('NotifyMe');
	}


	public function execute($sub) {
		$out = $this->getOutput();

		$out->setPageTitle($this->msg('notifyme-notify'));

		$out->addHelpLink('How to become a MediaWiki hacker');
		$out->addWikiMsg('notifyme-welcome');


		$out->addWikiMsg('notifyme-notify-intro');

		EchoEvent::create(
		    array(
			'type' => 'notifyme-user-notify',
                        'extra' => array(
	                        'notify-user-id' => $this ->getUser() ->getId()
			),
                        'agent' => $this->getUser(),
		    )
		);

	}

		protected function getGroupName() {
			return 'other';
		}

}


