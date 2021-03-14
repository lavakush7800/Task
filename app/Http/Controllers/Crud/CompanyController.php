<?php

namespace App\Http\Controllers\Crud;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Crud\Company;
use App\Http\Requests\StoreCompany;

class CompanyController extends Controller
{
    public function index(){
        return view('company');
    }

    public function store(StoreCompany $request){
        try{
            $data = $request->all();
            // dd($data);
            $fname = $request->image->store('/public');
            $data['image'] =$fname;
            $result = Company::get($data);
            return redirect('company_show');
        }catch(\Exception $e){

        }
    }
    public function show(){
        try{
            $results = Company::show();
            return view('company_show', compact('results'));
        }catch(\Exception $e){

        }
    }
    public function edit($id){
        try{
            $data = Company::getById($id);
            // dd($data);
            if($data){
                return view('company_edit',['company_data'=>$data]);
            }
            else{
                return redirect('company_show')->withErrors('Data Not Found'); 
            }
        }catch(\Exception $e){

        }
    }
    public function update(Request $request){
        try{
            $data = $request->all();
            $fname = $request->image->store('/public');
            $data['image'] =$fname;
            $result= company::update($data);

            if(!empty($result)){
                return redirect('company_show');
            }else{
                return redirect('company_show')->withError('Unable to save');
            }
        }catch(\Exception $e){

        }
    }
    public function delete($id){
        try{
           $result = Company::delete($id);
           if($result){
               return redirect('company_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }else{
            return redirect('company_show')->withErrors(['msg', 'Unable Yo Dalete!']);
           }
        }catch(\Exception $e){

        }
    }
}

