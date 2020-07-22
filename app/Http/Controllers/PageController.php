<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use View;
use App;

class PageController extends Controller
{

    public function inicio(){
    //  $datosBD = App\UserData::all(); //Trae todo de la BD.
        $nuevoUser = new App\Dato;



    $nuevoUser->userip =request()->ip();


        $nuevoUser -> save();

    	 return view('index');
							}


    public function imagenfondo(Request $datos){
    	$value = $datos->mes;
      $value2 = $datos->dia;
 //	 $input = $request->input();
  //  $imagen = $input['dia'];
 //$inputs = request()->all();
    	//  $name = $request->input('dia');
    	// $imagen = $request->input('enero'.$numero);

    //	 dd($request->all());  //to check all the datas dumped from the form
   //if your want to get single element,someName in this case
   	//	$someName = $request->dia; 
    	//	 return view('imagenFondo');
     //   return Redirect::to('/imagenFondoMostrar');
   // 	return view('imagenFondoMostrar');
     // return  'Form Posted.';
   //   return redirect()->route('imagenFondoMostrar');
   //   return redirect()->route('imagenFondoMostrar');
     
     



       //  return view('imagenFondoMostrar');
    return View::make('imagenFondoMostrar', array('value'=>$value, 'value2'=>$value2));
    //  return View::make("imagenFondoMostrar")->with(array('value2'=>$value2));
  //  return redirect()->back();



							}

  //public function imagenFondoMostrar(){
   // 	 return view('imagenFondoMostrar');
		//				}


}
