Joomla Payment API
===============

The *Payment* package is meant to be used as a low level implementation for payment processing.

Usage Examples
==============

    <?php
    class JPaymentProcessor2Checkout extends JPaymentProcessorDirect {
    	public function process()
    	{
    		.....
    	}
    }

    $data = new JPaymentData();
    $data->amount	= 123.12;
    $data->currency	= 'USD';
    $data->email	= 'text@example.com';
    .....

    $card = new JPaymentCard();
    $card->number 			= '1111222233334444';
    $card->expirationMonth 	= '12';
    $card->expirationYear 	= '2013';

    $processor = new JPaymentProcessor2Checkout($data, $card);
    $payment = $processor->process();

    switch ($payment->status) {
    	....
    } 
    ?>