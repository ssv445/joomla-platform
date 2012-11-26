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
 * Class that represents a Payment done using a JPaymentProcessor
 * Stores any result and any transaction-related data
 *
 * @package     Joomla.Platform
 * @subpackage  Payment
 * @since       12.1
 */
abstract class JPayment
{
	/**
	 * @var    float  The total amount of the transaction.
	 * @since  12.1
	 */
	public $amount;

	/**
	 * @var    string  The unique transaction id of the payment
	 * @since  12.1
	 */
	public $transactionId;

	/**
	 * @var    string  The result status of the payment
	 * @since  12.1
	 */
	public $status;

	/**
	 * @var JRegistry  Any extra information regarding the transaction
	 * @since 12.1
	 */
	public $data;
}