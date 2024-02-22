<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BuilderController extends Controller
{


    public function AllData(){

        $result=DB::table('details')->get();
        return $result;
    }

    public function FindData(Request $request){
        $id=$request->input('id');
        $result=DB::table('details')->find($id);
        return $result->roll;
    }

    public function WhareData(Request $request){

        $result=DB::table('details')->where('name','kajal')->first();
        return $result->name;

    }

    public function PulkData(){
        $result=DB::table('details')->pluck('name','roll');
        return $result;
    }

}