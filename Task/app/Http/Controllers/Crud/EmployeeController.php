<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\Employee;
use App\Lib\Crud\Company;
use App\Http\Requests\StoreEmployee;

class EmployeeController extends Controller
{
    public function index(){
        $results = Company::show();
        // dd($results);
        return view('employee', compact('results'));
    }

    public function store(StoreEmployee $request){
        try{
            $data = $request->all();
            $result = Employee::store($data);
            return redirect('employee_show');
        }catch(\Exception $e){

        }
    }
    public function show(){
        try{
            $results = Employee::show();
            return view('employee_show', compact('results'));
        }catch(\Exception $e){

        }
    }
    public function edit($id){
        try{
            $data = Employee::getById($id);
            // dd($data);
            if($data){
                return view('employee_edit',['employee_data'=>$data]);
            }
            else{
                return redirect('employee_show')->withErrors('Data Not Found'); 
            }
        }catch(\Exception $e){

        }
    }
    public function update(Request $request){
        try{
            $data = $request->all();
            // dd($data);
            $result= Employee::update($data);

            if(!empty($result)){
                return redirect('employee_show');
            }else{
                return redirect('employee_show')->withError('Unable to save');
            }
        }catch(\Exception $e){

        }
    }
    public function delete($id){
        try{
           $result = Employee::delete($id);
           if($result){
               return redirect('employee_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }else{
            return redirect('employee_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }
        }catch(\Exception $e){

        }
    }
}

