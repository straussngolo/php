<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class StraussFriendController extends Controller
{
    //

    public function show(Request $request, string $friend =null){
           //les paramètres get...

    dump($_GET['color']?? null);//ancienne méthode
    dump($request->input('color', 'rose'));// nouvelle méthode
    dump(request('color')); //autre méthode

    return view('strauss' , [
    
    'age'=>Carbon::parse('1990-12-31')->age,
    'color' =>$request->input('color','rose'),
    'friend'=> ucfirst($friend),

    ]);


    }
    
}
