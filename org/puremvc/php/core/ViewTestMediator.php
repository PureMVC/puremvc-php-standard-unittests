<?php
/**
 * PureMVC PHP Unit Tests
 * @author Omar Gonzalez :: omar@almerblank.com
 * @author Hasan Otuome :: hasan@almerblank.com 
 * 
 * Created on Sep 24, 2008
 * PureMVC - Copyright(c) 2006-2008 Futurescale, Inc., Some rights reserved.
 * Your reuse is governed by the Creative Commons Attribution 3.0 Unported License
 */
require_once 'org/puremvc/php/interfaces/IMediator.php';
require_once 'org/puremvc/php/patterns/mediator/Mediator.php';
/**
 * A Mediator class used by ViewTest.
 * 
 * @see org.puremvc.php.core.view.ViewTest ViewTest
 */
class ViewTestMediator extends Mediator implements IMediator
{
	const NAME = 'ViewTestMediator';
	/**
	 * Constructor
	 */
	public function __construct( $mediatorName, $viewComponent = null )
	{
		parent::__construct( ViewTestMediator::NAME, $viewComponent );
	}
	
	/**
	 * The Notification(s) this IMediator is interested in.
	 * 
	 * @return an <code>Array</code> of the <code>INotification</code> names this <code>IMediator</code> has an interest in. 
	 * @see IMediator::listNotificationInterests()
	 */
	public function listNotificationInterests()
	{
		// be sure that the mediator has some Observers created
		// in order to test removeMediator
		return array( 'ABC', 'DEF', 'GHI' );
	}
}

?>
