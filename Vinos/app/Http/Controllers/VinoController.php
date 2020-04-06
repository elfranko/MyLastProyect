<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;

class VinoController extends Controller
{
    public function index() {
        return view('index');
    }
    
    public function store(Request $request) {

        $validator = Validator::make($request -> all(), [
            'nombre' => 'required|min:3|max:20', 
            'edad' => 'required|min:3|max:20', 
            'color' => 'required|min:3|max:20', 
            'azucar' => 'required|min:3|max:20', 
            'gradoal' => 'required|min:3|max:20', 
            'img' => 'required|min:3|max:20', 
            
        ]);

        if($validator -> falls()) {
            dd('Favor de llenar los campos');
        } else {
            dd('todo bien');
        }

       
    }
}
