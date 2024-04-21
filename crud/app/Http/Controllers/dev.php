<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class dev extends Controller
{
    public function register(){

        $data = new student();   
        $url = "/store";
        return view('welcome',compact('data','url'));
        
    }


    public function store(Request $request){

        Student::create($request->all())->save();
        return redirect("/data");
    }

    public function display(Request $request){

        $data = Student::all();
        return view('display',compact('data'));

    }

    public function edit($id ,Request $request){

        $data = Student::find($id);
        $url="/update/".$id;
        return view('welcome',compact('data','url'));
        
    }

    public function update($id ,Request $request){

        $data = Student::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = $request->password;
        $data->save();
        return redirect('/data');
        
    }

    public function delete($id){

        $data = Student::find($id)->delete();
        return redirect()->back();
    }

}
