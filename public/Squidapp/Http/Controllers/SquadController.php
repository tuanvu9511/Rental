<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\SquadServiceInterface;
use Exception;
use Illuminate\Http\Request;

class SquadController extends Controller
{
    private $squadService;

    function __construct(SquadServiceInterface $squadServices)
    {
        $this->squadService = $squadServices;
    }

    public function index()
    {
        $result = $this->squadService->fetchAll();
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
            'status' => $request->status
        ];
        $result = $this->squadService->save($data);
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
            'status' => $request->status
        ];
        $result = $this->squadService->update($id, $data);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }


    public function delete($id, Request $request)
    {
        $result = $this->squadService->delete($id);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }

}
