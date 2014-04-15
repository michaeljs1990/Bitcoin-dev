<?php namespace Bitcoin;

class Transaction extends Bitcoin{

	private $from;
	private $to;
	private $amount;

	function __construct($amount, $to, $from = null)
	{
		$this->from = $from;
		$this->to = $to;
		$this->amount = $amount;
	}

	// Output current state of transaction
	public function peek()
	{
	}

	// Send the transaction
	public function execute()
	{
	}

	// Create transaction
	private function generate()
	{
	}

	// Check balance to ensure transaction possibility
	private function balance()
	{
	}
	
	// Check to ensure transaction is valid
	private function validate()
	{
	}

}
