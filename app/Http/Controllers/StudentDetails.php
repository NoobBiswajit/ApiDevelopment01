<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentDetails extends Controller

{

    public function AllData(){
    $SQL="SELECT * from details";
    $result=DB::select($SQL);
    return $result;
    }

    public function InserData(Request $request){
        $name=$request->input('name');
        $roll=$request->input('roll');
        $city=$request->input('city');
        $phn=$request->input('phn');
        $class=$request->input('class');

        $SQL="INSERT INTO `details`(`name`, `roll`, `city`, `phn`, `class`) VALUES (?,?,?,?,?)";
        $result=DB::insert($SQL,[$name, $roll,$city,$phn,$class]);

        if($result==true){
            return 'Data insert Successfull';
        }else{
            return 'Data insert fail';

        }
    }

    public function DeleteData(Request $request){
        $id=$request->input('id');
        $SQL="DELETE FROM `details` WHERE `id`=?";
        $result=DB::delete($SQL,[$id]);
        if($result==true){
            return 'Data Delete Successfull';
        }else{
            return 'Data Delete fail';

        }
    }


    public function UpdateData(Request $request){
        $id=$request->input('id');
        $name=$request->input('name');
        $roll=$request->input('roll');
        $city=$request->input('city');
        $phn=$request->input('phn');
        $class=$request->input('class');

        $SQL="UPDATE `details` SET `name`=?,`roll`=?,`city`=?,`phn`=?,`class`=? WHERE `id`=?";
        $result=DB::update($SQL,[$name, $roll,$city,$phn,$class,$id]);

          if($result==true){
            return 'Data update Successfull';
        }else{
            return 'Data upadte fail';

        }
    }

}
