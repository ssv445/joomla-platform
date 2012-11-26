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
 * Joomla Payment Processor Indirect Base Class
 *
 * @package     Joomla.Platform
 * @subpackage  Payment
 * @since       12.1
 */
abstract class JPaymentProcessorDirect extends JPaymentProcessorBase
{
	/**
	 * Get the url to which we should redirect the user
	 *
	 * @return string The url to which we should redirect to
	 */
	public function getUrl();

	/**
	 * Process the data that we got back from the gateway
	 *
	 * @return JPayment The payment object populated with the transaciton informations
	 */
	public function process();
}