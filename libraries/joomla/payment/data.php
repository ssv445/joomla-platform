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
 * Placeholder object to store data to pass to a payment processor
 *
 * @package     Joomla.Platform
 * @subpackage  Payment
 * @since       12.1
 */
class JPaymentData extends JRegistry
{
	/**
	 * @var float  The transaction amount to be processed
	 */
	public 		$amount;

	/**
	 * @var string The currency ISOCODE
	 */
	public 		$currency;

	/**
	 * @var JRegistry	Extra data useful for the payment processor
	 */
	protected	$data;
}