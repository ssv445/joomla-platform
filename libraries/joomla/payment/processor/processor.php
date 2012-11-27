<?php
/**
 * @package     Joomla.Platform
 * @subpackage  Payment
 *
 * @copyright   Copyright (C) 2005 - 2011 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

defined('JPATH_PLATFORM') or die;

/**
 * Joomla Payment Processor Interface
 *
 * @package     Joomla.Platform
 * @subpackage  Payment
 * @since       12.1
 */
interface JPaymentProcessor
{
	/**
	 * Constructor.
	 *
	 * @since   12.1
	 */
	public function __construct();

	/**
	 * Verify given data for Payment request. 
	 * Check processor specific details and conversion
	 *
	 * @return JPaymentProcessor OR raises an JPaymentException
	 */
	public function verify();
	
	
	/**
	 * Request the payment, 
	 * start requesting payment from payment gateway
	 *  > If an API based gateway, do it now, and return the JPaymentReponse to caller
	 *  > If a redirect needed respond Some-Data-Structure
	 *  > In case of error, raise JPaymentException
	 *
	 * @return JPayment An object representing the transaction
	 */
	public function request();
	
	/**
	 * Process the payment response/notification
	 *  > Create a JPaymentTransaction object, which contain all the information debit/credit/action.
	 *  > In case an error raise JPaymentException
	 * 
	 * @return JPayment An object representing the transaction
	 */
	public function process();
	
}