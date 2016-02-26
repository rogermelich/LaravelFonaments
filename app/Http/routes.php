<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

interface Fuel {
    public function getPrice();
}

class JeepWrangler
{
    public function __construct(Fuel $fuel)
    {
        $this->fuel = $fuel;
    }

    public function refuel($litres)
    {
        return $litres * $this->fuel->getPrice();
    }
}

class Petrol implements Fuel
{
    public function getPrice()
    {
        return 120;
    }
}

class Gasolina implements Fuel
{
    public function getPrice()
    {
        return 20;
    }
}


//$petrol = new Petrol;
//$car = new JeepWrangler($petrol);
$car = $this->app->make('Fuel','Petrol');
$car = $this->app->make('JeepWrangler');
$car = $this-refuel(60);

echo $cost;

//dd($this->app);

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
