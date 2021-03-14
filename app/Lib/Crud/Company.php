<?php
namespace App\Lib\Crud;
use App\Http\Controllers\Crud\CompanyController;
use App\Models\Company as Model;
use Illuminate\Support\Facades\Log;

class Company{
    public static function get(array $data):bool{
        try{
            // dd($data);
            $result = Model::create($data);
            if($result){
                return true;
            }else{
                return false;
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    public static function show():array{
        try{
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
            $company_data = [
                'image' => $data['image'],
                'company_name' => $data['company_name'],
            ];
            $id = $data['id'];
            $result = Model::where('id', $id)->update($company_data);
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