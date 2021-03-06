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
require_once 'org/puremvc/php/patterns/command/SimpleCommand.php';
/**
 * A SimpleCommand subclass used by SimpleCommandTest.
 * 
 * @see org.puremvc.php.patterns.command.SimpleCommandTest SimpleCommandTest
 * @see org.puremvc.php.patterns.command.SimpleCommandTestVO SimpleCommandTestVO
 */
class SimpleCommandTestCommand extends SimpleCommand
{	
	/**
	 * Constructor
	 */
	public function __construct() 
	{
		parent::__construct();
	}
	/**
	 * Fabricate a result by multiplying the input by 2
	 * 
	 * @param INotification $note the Notification carrying the FacadeTestVO
	 */
	public function execute( INotification $note )
	{
		$vo = $note->getBody();
		$vo->result = 2 * $vo->input;
	}
}

?>
