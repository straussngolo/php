<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

private array $team =[
    
        ['name'=>'Marina'],
        ['name'=>'Fiorella'],
        ['name'=>'Mathieu'],
    

];


    //
    public function index(){

      return view('about',[

        'name'=>'Laravel',
        'team'=>$this->team,
      ]);

    }

    public function show(string $user){

      if(! in_array($user, array_column($this->team, 'name'))){
        abort(404);
      }



        return view('about-show', ['user' => $user]);


    }
}
