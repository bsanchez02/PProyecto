<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function subirArchivo(Request $request){

        $this->validate($request, [
            'archivo' => 'required',
            
        ]);

        $request->file('archivo')->store('public');

        return redirect()->route('Inicio');
    }
}
