<?php

namespace App\Services;

use App\Services\Interfaces\EmployeeServiceInterface;
use App\Models\Employee;
use App\Models\Squad;
use App\Models\Position;
use Exception;

class EmployeeService implements EmployeeServiceInterface
{
    public function fetchAll() : ResultBase
    {
        try {
            $result = Employee::select('employees.id',
            'employees.name',
            'employees.email',
            'employees.skills',
            'positions.name as position',
            'squads.name as squad',
            'employees.position_id',
            'employees.squad_id',
            'employees.status',
            )
            ->join('positions', 'employees.position_id', '=', 'positions.id')
            ->join('squads', 'employees.squad_id', '=', 'squads.id')
            ->orderBy('employees.id')
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
            $resultEmployee = Employee::where('name', $data['name'])->first();
            if($resultEmployee != null)
                return new ResultBase(false, [], 'employee already exist!', 400);

            $resultSquad = Squad::where('id', $data['squad_id'])->first();
            if($resultSquad == null)
                return new ResultBase(false, [], 'squad not found!', 400);
                    
            $resultPosition = Position::where('id', $data['position_id'])->first();
            if($resultPosition == null)
                return new ResultBase(false, [], 'position not found!', 400);
                
                        
                            
            $squad = new Employee();
            $squad->name = $data['name'];
            $squad->email = $data['email'];
            $squad->skills = $data['skills'];
            $squad->position_id = $data['position_id'];
            $squad->squad_id = $data['squad_id'];
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
            $squad = Employee::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'employee not found!', 400);
            
            Employee::where('id', $id)
            ->update([
                'name' => $data['name'],
                'email' => $data['email'],
                'skills' => $data['skills'],
                'position_id' => $data['position_id'],
                'squad_id' => $data['squad_id'],
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
            $squad = Employee::where('id', $id)->first();
            if($squad == null)
                return new ResultBase(false, [], 'employee not found!', 400);
            
            Employee::where('id', $id)->delete();

            return new ResultBase(true, [], '', 200);
        } 
        catch (Exception $ex) {
            return new ResultBase(false, [], 'Processing error. Contact IT!', 500);
        }

    }
    
}