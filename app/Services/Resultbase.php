<?php
namespace App\Services;
Class Resultbase
{
	public $success;
	public $result;
	public $message;
	public $statusCode;

	function __construct(bool $success, $result, string $message, int $statusCode)
	{
		$this->success = $success;
		$this->result = $result;
		$this->message = $message;
		$this->statusCode = $statusCode;
	}
}