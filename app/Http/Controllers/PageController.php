<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function inicio(){
    	 return view('index');
							}


    public function imagenFondo(Request $request){
    //	$value = $request->dia;
 //	 $input = $request->input();
  //  $imagen = $input['dia'];
 //$inputs = request()->all();
    	//  $name = $request->input('dia');
    	// $imagen = $request->input('enero'.$numero);

    //	 dd($request->all());  //to check all the datas dumped from the form
   //if your want to get single element,someName in this case
   	//	$someName = $request->dia; 
    	//	 return view('imagenFondo');
    	return view('imagenFondoMostrar');
    	//  return redirect()->route('imagenFondoMostrar');
							}

  public function imagenFondoMostrar(){
    	 return view('imagenFondoMostrar');
							}

}
