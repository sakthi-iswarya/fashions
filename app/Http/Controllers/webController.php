<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formmodel;

class webController extends Controller
{
    
    public function webAbout(){
        return view('about');
    }
     public function webInsert(Request $request){
        $insert['name']=$request->input('f_name');
        $insert['password']=$request->input('f_pass');
        $insert['email']=$request->input('f_mail');
        $insert['number']=$request->input('f_num');
        $insert['date_of_birth']=$request->input('f_birth');
        $insert['address']=$request->input('f_add');
        $insert['date']=$request->input('f_date');
        $new = $this->f_model->storage($insert);
        return redirect('about');
    }
    public function __construct() {
        $this->f_model = new formmodel();
    }


}
