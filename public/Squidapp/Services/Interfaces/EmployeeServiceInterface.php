<?php

namespace App\Services\Interfaces;

use App\Services\ResultBase;

interface EmployeeServiceInterface 
{
    public function fetchAll() : ResultBase;
    public function save(array $data) : ResultBase;
    public function update(int $id, array $data) : ResultBase;
    public function delete(int $id) : ResultBase;
}