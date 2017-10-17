<?php

use Illuminate\Database\Seeder;
use App\Car;

class CarSeeder extends Seeder
{

    private static $models = [
        'Toyota Leaf',
        'Ford Mondeo',
        'Porshe Panomera',
        'Volkswagen Passat',
        'Skoda Oktavia',
        'Honda Accord',
        'Tavriya Nova',
        'Volkswagen Golf',
        'Nissan Note',
        'Jaguar X-type',
        'Deawoo Lanos',
        'Kia Rio',
        'Seat Ceed'

    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Car::class, count(self::$models))->create()
        ->each(function ($c) {
                $c->models = self::$models[random_int(0, count(self::$models) - 1)];
                $c->save();
       });
    }
}