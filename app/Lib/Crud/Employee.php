<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\EmployeeController;
use App\Models\Employee as Model;
use Illuminate\Support\Facades\Log;
use Auth;

class Employee{
    public static function store(array $data){
        try{
            $userid= Auth::id();
            $result = Model::create($data);
            // dd($result);
            return $result;
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function show():array{
        try{
            $userid= Auth::id();
            $data = Model::all();
            if($data){
                return $data->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function getById($id):object{
        try{
            $data = Model::find($id);  
            // dd($data);
            if($data){
                return $data;
            }else{
                return '';
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function update(array $data):bool{
        try{
            // dd($data);
            $employee_data = [
                'name' => $data['first_name'],
                'name' => $data['last_name'],
                'email' => $data['email'],
                'mobile' => $data['mobile'],
                'amount' => $data['amount'],
                'designation' => $data['designation']
            ];
            $id = $data['id'];
            $result = Model::where('id', $id)->update($employee_data);
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function delete($id):bool{
        try{
            $result = Model::find($id)->delete();
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
}