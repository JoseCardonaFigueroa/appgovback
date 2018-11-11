<?php

use Illuminate\Database\Seeder;
use App\Obra;
use App\Progreso;

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

      $localidad =  [
      '1' => 'Aguascalientes',
      '2' => 'Baja California',
      '3' => 'Baja California Sur',
      '4' => 'Campeche',
      '5' => 'Chiapas',
      '6' => 'Chihuahua',
      '7' => 'Coahuila de Zaragoza',
      '8' => 'Colima',
      '9' => 'Ciudad de México',
      '10' => 'Durango',
      '11' => 'Guanajuato',
      '12' => 'Guerrero',
      '13' => 'Hidalgo',
      '14' => 'Jalisco',
      '15' => 'Mexico',
      '16' => 'Michoacan de Ocampo',
      '17' => 'Morelos',
      '18' => 'Nayarit',
      '19' => 'Nuevo Leon',
      '20' => 'Oaxaca',
      '21' => 'Puebla',
      '22' => 'Queretaro de Arteaga',
      '23' => 'Quintana Roo',
      '24' => 'San Luis Potosi',
      '25' => 'Sinaloa',
      '26' => 'Sonora',
      '27' => 'Tabasco',
      '28' => 'Tamaulipas',
      '29' => 'Tlaxcala',
      '30' => 'Veracruz-Llave',
      '31' => 'Yucatan',
      '32' => 'Zacatecas',

    ];

      // And now, let's create a few articles in our database:
      for ($i = 1; $i <= 30; $i++) {
          $oArr = [
              'archivo' => $i,
              'gaveta' => $faker->sentence,
              'expediente' => 200 + $i,
              'gaveta' => $faker->sentence,
              'no_obra' => 'Vo.Bo.-00'.$i.'/1',
              'registro_de_oficios' => 'oficio',
              'fuente_financiera' => 'Banamex',
              'ejercicio' => '2018',
              'descripcion_obra' => $faker->paragraph,
              'localidad' => $localidad[$i],
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
          ];
          $o = Obra::create($oArr);

          for ($j=1; $j < 5; $j++) { 
            Progreso::create([
              'fecha' => $faker->date($format = 'Y-m-d', $max = 'now'),
              'porcentaje' => $faker->randomNumber($nbDigits = 100, $strict = false),
              'dia' => $faker->randomNumber($nbDigits = 100, $strict = false),
              'subtotal' => $o->id,
            ]);
          }
      }
    }
}
