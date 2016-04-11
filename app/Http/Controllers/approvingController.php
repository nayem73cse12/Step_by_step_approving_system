<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Input;
use App\applyModel;
use Auth;

class approvingController extends Controller
{
    public function form()
    {
        return view('formPage');
    }

    public function formSubmit()
    {
        $data=[
         'name'=>Input::get('name'),
         'father_name'=>Input::get('fatherName'),
         'mother_name'=>Input::get('motherName'),
         'phone_no'=>Input::get('phoneNo'),
         'email'=>Input::get('email'),
         'address'=>Input::get('address'),
         'plot_area'=>Input::get('area'),
         'floor_amount'=>Input::get('floorAmount'),
         'status'=>'0'
            ];
 
       $response=applyModel::create($data);
       if($response){
        echo "You have successfully submitted your application.";
       }
       else
        echo "You are unsuccessfull";
    }

    public function showApplications()
    {
        if (Auth::check()) {
         $user = Auth::user();
         $status=$user->position;
         $data1=applyModel::orderBy('status');
         $data=$data1->Where('status','LIKE',$status)->get();
        return view('showApplications')->with('data',$data);
        }
        else
            return redirect ('auth/login');
    }

    public function details($application_id)
    {
        $data=applyModel::find($application_id);
        return view('details')->with('data',$data);
    }

    public function approve($application_id)
    {
       
       
       if (Auth::check()) {
         $user = Auth::user();
         $status=$user->position;
         $stat=$status+1;
          $data=[
              'status'=>$stat
            ];
        $response=applyModel::find($application_id)->update($data);
        if($response){
        $data1=applyModel::orderBy('status');
        $data2=$data1->Where('status','LIKE',$status)->get();
        return view('showApplications')->with('data',$data2);
        }
        else
        {
            echo "No response";
        }
    }
        else
            return redirect ('auth/login');
    }

}
