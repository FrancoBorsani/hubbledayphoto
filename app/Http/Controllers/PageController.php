<?php

namespace App\Http\Controllers;
use Redirect;
use Illuminate\Http\Request;
use View;
use App;
use Illuminate\Support\Facades\Hash;

class PageController extends Controller
{

    public function inicio(){
        $datosBD = App\Dato::all(); //Trae todo de la BD.
        $nuevoUser = new App\Dato;
        $nuevoUser->userip =request()->ip();
        $bandera = false;
        foreach ($datosBD as $usersip) {
          if ($nuevoUser->get('userip') == $usersip->get('userip')) {
            $bandera = true;
          }
        }


     //   echo "{{$datosBD}}";
        if(!$bandera) {
      $nuevoUser->fill([
         'userip' => encrypt($nuevoUser->get('userip'))
      ])->save();


       $nuevoUser -> save();
         // //   $claveEncriptada -> save();
        }

        $consulta = \DB::table('datos')->select('userip')->groupBy('userip')->get()->count();
        return view('index', compact('consulta'));
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
