<?php


namespace App\Http\Controllers;

use App\Models\car;
use Illuminate\Support\Str;


class CarController extends Controller
{

    public function showAction($id){
        $car = car::find($id);
        echo $car->Brand."<br>";
        echo $car->Model."<br>";
        echo $car->color."<br>";
        echo $car->VIN."<br>";
        echo $car->updated_at;
    }

    public function insertAction(){
        $car = new car();
        $car->Brand = Str::random(10);
        $car->Model = Str::random(7);
        $car->color = Str::random(5);
        $car->VIN = Str::random(17);
        $car->save();
    }

    public function updateAction($id){
    $car = car::where("id", "=", $id)->first();
    $car->update(["VIN"=>Str::random(17)]);
    }

    public function deleteAction($id){
    $car = car::find($id);
    $car->delete();
    }

    public function showAllAction(){
    $cars = car::all();
    foreach ($cars as $car){
        echo "Brand and Model:". $car->Brand . " ". $car->Model . " Color:".$car->color. " VIN:".$car->VIN."<br>";
    }
    }


}
