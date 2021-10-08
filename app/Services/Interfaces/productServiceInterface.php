<?php
namespace App\Services\Interfaces;
use App\Services\Resultbase;

interface productServiceInterface 
{
	function save(array $data) : Resultbase;
	function fetchAll() : Resultbase;
}