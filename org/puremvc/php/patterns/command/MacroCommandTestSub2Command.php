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
require_once 'org/puremvc/php/interfaces/INotification.php';
require_once 'org/puremvc/php/patterns/command/SimpleCommand.php';
/**
 * A SimpleCommand subclass used by MacroCommandTestCommand.
 *
 * @see org.puremvc.php.patterns.command.MacroCommandTest MacroCommandTest
 * @see org.puremvc.php.patterns.command.MacroCommandTestCommand MacroCommandTestCommand
 * @see org.puremvc.php.patterns.command.MacroCommandTestVO MacroCommandTestVO
 */
class MacroCommandTestSub2Command extends SimpleCommand
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
		$vo->result2 = $vo->input * $vo->input;
	}
}

?>
