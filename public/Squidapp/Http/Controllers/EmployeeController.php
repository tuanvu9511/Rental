<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\EmployeeServiceInterface;
use Exception;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private $employeeService;

    function __construct(EmployeeServiceInterface $employeeServices)
    {
        $this->employeeService = $employeeServices;
    }

    public function index()
    {
        $result = $this->employeeService->fetchAll();
        if($result->success) {
            return response()->json($result->result, $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }

    public function save(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'skills' => $request->skills,
            'position_id' => $request->position_id,
            'squad_id' => $request->squad_id,
            'status' => $request->status
        ];
        $result = $this->employeeService->save($data);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }

    public function update($id, Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'skills' => $request->skills,
            'position_id' => $request->position_id,
            'squad_id' => $request->squad_id,
            'status' => $request->status
        ];
        $result = $this->employeeService->update($id, $data);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }


    public function delete($id, Request $request)
    {
        $result = $this->employeeService->delete($id);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }

}
