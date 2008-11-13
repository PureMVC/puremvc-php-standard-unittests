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
class ViewTestMediator2 extends Mediator implements IMediator
{
	/**
	 * The Mediator name.
	 */
	const NAME = 'ViewTestMediator2';
	/**
	 * Constructor
	 */
	public function __construct( $mediatorName, $viewComponent = null )
	{
		parent::__construct( ViewTestMediator2::NAME, $viewComponent );
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
		return array( ViewTest::NOTE1, ViewTest::NOTE2 );
	}
	
	/**
	 * 
	 * @param notification the <code>INotification</code> to be handled 
	 * @see IMediator::handleNotification()
	 */
	public function handleNotification( INotification $notification )
	{
		print( $notification->getName() );
		$this->viewTest()->lastNotification = $notification->getName();
	}
	
	/**
	 * Returns the view component associated with this Mediator.
	 *
	 * @return mixed
	 */
	public function viewTest()
	{
		return $this->viewComponent;
	}
}

?>
