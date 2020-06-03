<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\heroe;
use Faker\Generator as Faker;

$factory->define(heroe::class, function (Faker $faker) {
	$nombreimagen= 'img/'.$faker ->randomElement
	(['darth_vader','doctor_muerte','joker','kang','loki','magneto','ultron']).'.gif';
    return 
    [
    	'nombre' => $faker->name,
    	'titulo' => $faker->paragraph(1),
    	'descripcion' => $faker->paragraph(2),
    	'imagen'=> $nombreimagen,

        
    ];
});
