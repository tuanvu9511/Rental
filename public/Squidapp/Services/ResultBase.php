<?php

namespace App\Services;

class ResultBase 
{
    public bool $success;
    public $result;
    public string $message;
    public int $statusCode;

    function __construct(bool $success, $result, string $message, int $statusCode)
    {
        $this->success = $success;
        $this->result = $result;
        $this->message = $message;
        $this->statusCode = $statusCode;
    }
}