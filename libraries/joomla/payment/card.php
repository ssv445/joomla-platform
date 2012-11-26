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
 * Joomla Card class
 *
 * @package     Joomla.Platform
 * @subpackage  Payment
 * @since       12.1
 */
class JPaymentCard
{
	/**
	 * The card number
	 *
	 * @var string
	 */
	public $number 			= '';

	/**
	 * The card security code (ie: CVV2)
	 *
	 * @var string
	 */
	public $securityCode 	= '';

	/**
	 * The Expiration month for the card
	 *
	 * @var string
	 */
	public $expirationMonth	= '';

	/**
	 * The expiration year for the card
	 *
	 * @var string
	 */
	public $expirationYear	= '';

	/**
	 * The credit card type (ie: mastercard, visa, etc)
	 *
	 * @var string
	 */
	public $type			= '';

	/**
	 * Constructor.
	 *
	 * @since   12.1
	 */
	public function __construct();

	/**
	 * Check if the card has a valid number (format & type) and a valid expiration date (in the future)
	 * Runs also detectType() if the type is not preset by the user
	 *
	 * @return boolean If the card is valid
	 */
	public function isValid();

	/**
	 * Detects the type based on the number format, setting  $this->type automatically
	 */
	public function detectType();
}