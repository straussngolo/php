<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $title= 'webflix';
    
    return view('home', [
        'title' => $title,
        'numbers'=>[1,2,3],
    ]);
});

Route::get('/strauss/{friend?}', function (Request $request, string $friend = null){

    //les paramètres get...

    dump($_GET['color']?? null);//ancienne méthode
    dump($request->input('color', 'rose'));// nouvelle méthode
    dump(request('color')); //autre méthode

    return view('strauss' , [
    
    'age'=>Carbon::parse('1990-12-31')->age,
    'color' =>$request->input('color','rose'),
    'friend'=> ucfirst($friend),

    ]);
});

Route::get('/a-propos', function(){

return view('about', [
    'name'=>'Laravel',
    'team'=>[
        ['name'=>'Marina'],
        ['name'=>'Fiorella'],
        ['name'=>'Mathieu'],
    ]
    ]);
});

Route::get('/a-propos/{user}',function (string $user){

    return "La page de $user";

});

Route::get('/a-propos/{user}' function(s))