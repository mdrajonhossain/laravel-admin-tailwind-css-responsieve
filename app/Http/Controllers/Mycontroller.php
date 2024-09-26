<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mycontroller extends Controller{
    //

    public function create(Request $request){

        $datae = $request->validate([
            'name' => 'required|string|max:5',
            'fname' => 'required|string|max:5',
            'mname' => 'required|string|max:5',
        ]);
        
        dd($datae);

    }
}
