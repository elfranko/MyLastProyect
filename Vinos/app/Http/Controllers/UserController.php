<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use validator;

class UserController extends Controller
{
    public function index(){
        return view('/usuarios');
    }

    public function store(Request $request) {
        $validator = Validator::make($request -> all(), [
            'nombre' => 'required|min:3|max:20', 
            'email' => 'required|min:3|email', 
            'pass1' => 'required|min:3|required_with:pass2|same:pass2',
            'pass2' => 'required|min:3'
        ]);

        if($validator -> falls()) {
            dd('Favor de llenar los campos');
        } else {
            dd('todo bien');
        }
    }
}
