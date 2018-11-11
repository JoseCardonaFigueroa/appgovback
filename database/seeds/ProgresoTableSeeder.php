<?php

use Illuminate\Database\Seeder;
use App\Progreso;
use App\Obra;

class ProgresoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
      // And now, let's create a few articles in our database:
      for ($i = 1; $i <= 50; $i++) {
          Progreso::create([
              'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'porcentaje' => $faker->randomNumber($nbDigits = 100, $strict = false),
              'dia' => $faker->randomNumber($nbDigits = 100, $strict = false),
              'subtotal' => $faker->randomNumber($nbDigits = 100, $strict = false),
              'obra_id' => Obra::find($i)
          ]);
    }
}
