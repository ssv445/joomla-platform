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
	 * Process the payment
	 *
	 * @return JPayment An object representing the transaction
	 */
	public function process();
}