<?php

namespace App\Services;

use App\Services\Interfaces\PositionServiceInterface;
use App\Models\Position;
use Exception;

class PositionService implements PositionServiceInterface
{
    public function fetchAll() : ResultBase
    {
        try {
            $result = Position::select('*')
                        ->orderBy('name')
                        ->get();        

            return new ResultBase(true, $result, '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }
    }

    public function save(array $data) : ResultBase
    {
        try {
            $resultPosition = Position::where('name', $data['name'])->first();
            if($resultPosition != null)
                return new ResultBase(false, [], 'position already exist!', 400);
            
            $squad = new Position();
            $squad->name = $data['name'];
            $squad->status = $data['status'];
            $squad->save();        

            return new ResultBase(true, [], '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }
    }

    public function update(int $id, array $data) : ResultBase
    {
        try {
            $squad = Position::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'position not found!', 400);
            
            Position::where('id', $id)
            ->update([
                'name' => $data['name'],
                'status' => $data['status']
            ]);

            return new ResultBase(true, [], '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }

    }
    
    public function delete(int $id) : ResultBase
    {
        try {
            $squad = Position::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'position not found!', 400);
            
            Position::where('id', $id)->delete();

            return new ResultBase(true, [], '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }

    }
    
}