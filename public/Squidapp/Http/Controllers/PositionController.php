<?php

namespace App\Http\Controllers;

use App\Services\Interfaces\PositionServiceInterface;
use Exception;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    private $positionService;

    function __construct(PositionServiceInterface $positionServices)
    {
        $this->positionService = $positionServices;
    }

    public function index()
    {
        $result = $this->positionService->fetchAll();
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
        $result = $this->positionService->save($data);
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
        $result = $this->positionService->update($id, $data);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }


    public function delete($id, Request $request)
    {
        $result = $this->positionService->delete($id);
        if($result->success) {
            return response()->json('ok', $result->statusCode);
        }
        else {            
            return response()->json($result->message, $result->statusCode);
        }
    }

}
