<?php


class NotifyMeHooks {

	public static function onBeforeCreateEchoEvent( &$notifications, &$notificationCategories )  {
		$notifications['notifyme-user-notify'] = array(
		    'category' => 'system',
		    'section' => 'alert',
		    'primary-link' => array(
			'message' => 'notifyme-notification-user-notify',
			'destination' => 'new-notify'
		    ),
		    'formatter-class' => 'EchoNotificationFormatter     ',
		    'title-message' => 'notifyme-notification-title',
		    'title-params' => array( 'agent' ),
		    'flyout-message' => 'notifyme-notification-flyout',
		    'flyout-params' => array( 'agent' ),
		    'email-subject-message' => 'notifyme-email-subject',
		    'email-subject-params' => array( 'agent' ),
		    'email-body-batch-message' => 'notifyme-email-batch-body',
		    'email-body-batch-params' =>  array( 'agent' ),
		);
		return true;

	}

	public static function onEchoGetDefaultNotifiedUsers( $event, &$users ) {
		switch ( $event->getType() ) {
			case 'notifyme-user-notify':
				$extra = $event->getExtra();
				$recipientId = $extra['notify-user-id'];
				$recipient = User::newFromId( $recipientId );
				$users[$recipientId] = $recipient;
				break;
		}
		return true;
	}
}

