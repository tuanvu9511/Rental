<?php

namespace App\Services;

use App\Services\Interfaces\SquadServiceInterface;
use App\Models\Squad;
use Exception;

class SquadService implements SquadServiceInterface
{
    public function fetchAll() : ResultBase
    {
        try {
            $result = Squad::select('*')
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
            $resultSquad = Squad::where('name', $data['name'])->first();
            if($resultSquad != null)
                return new ResultBase(false, [], 'squad already exist!', 400);
            
            $squad = new Squad();
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
            $squad = Squad::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'squad not found!', 400);
            
            Squad::where('id', $id)
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
            $squad = Squad::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'squad not found!', 400);
            
            Squad::where('id', $id)->delete();

            return new ResultBase(true, [], '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }

    }
    
}