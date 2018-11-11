<?php

use Illuminate\Database\Seeder;
use App\Obra;

class ObrasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //Obra::truncate();

      $faker = \Faker\Factory::create();

      // And now, let's create a few articles in our database:
      for ($i = 0; $i < 50; $i++) {
          Obra::create([
              'archivo' => $faker->sentence,
              'gaveta' => $faker->sentence,
              'expediente' => $faker->sentence,
              'gaveta' => $faker->sentence,
              'no_obra' => $faker->sentence,
              'registro_de_oficios' => $faker->sentence,
              'fuente_financiera' => $faker->sentence,
              'ejercicio' => $faker->sentence,
              'descripcion_obra' => $faker->paragraph,
              'localidad' => $faker->sentence,
              'municipio' => $faker->sentence,
              'aprobado' => $faker->sentence,
              'contratado' => $faker->sentence,
              'modificado' => $faker->sentence,
              'no_contrato' => $faker->sentence,
              'plazo' => $faker->sentence,
              'ejecucion' => $faker->sentence,
              'asignacion' => $faker->sentence,
              'contratista' => $faker->sentence,
              'inicio_programado' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'inicio_real' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'termino_real' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'termino_programado' => $faker->date($format = 'Y-m-d', $max = 'now'),

          ]);
      }
    }
}
