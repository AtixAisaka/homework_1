<?php


namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class CarController extends Controller
{

    public function showAction($id){
        $car = car::find($id);
        return view('updateCar', ['car'=>$car]);
    }

    public function showInsertFormAction(){
        return view('addcar');
    }

    public function insertAction(Request $request){
        $car = new car();
        $car-> Brand = $request ->input('Brand');
        $car-> Model = $request ->input('Model');
        $car-> color = $request ->input('color');
        $car-> VIN = $request ->input('VIN');
        $car->save();
        return response() ->view('addcar');
    }

    public function updateAction($id, Request $request){
    $car = car::find($id);
    $car-> Brand = $request->input('Brand');
        $car-> Model = $request->input('Model');
        $car-> color = $request->input('color');
        $car-> VIN = $request->input('VIN');
    $car->update();
    return redirect()->action('CarController@showAllCars');
    }

    public function deleteAction($id){
    $car = car::find($id);
    $car->delete();
    return redirect()->action('CarController@showAllCars');
    }

    public function showAllAction(){
    $cars = car::all();
    foreach ($cars as $car){
        echo "Brand and Model:". $car->Brand . " ". $car->Model . " Color:".$car->color. " VIN:".$car->VIN."<br>";
    }
    }

    public function showAllCars(){
        $cars = car::all();
        return view ('showAllCars', ['cars'=>$cars]);
    }


}
