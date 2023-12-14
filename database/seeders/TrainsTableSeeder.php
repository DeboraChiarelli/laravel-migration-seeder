<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // Uso il ciclo for per aggiungere 10 voci alla tabella
        // all'interno del ciclo verranno create e salvate 10 istanze di modelli Train nel database.
        for ($i = 0; $i < 10; $i++) {
            $train = new Train(); // Crea un nuovo oggetto della classe Train, che rappresenta un record nella tabella trains del database.
            $train->company = $faker->company; // Utilizzo Faker per generare dati casuali e assegnarli alle proprietà dell'oggetto Train. 
            $train->departure_station = $faker->city;
            $train->departure_time = $faker->dateTimeBetween('+10 days', '+20 days')->format('Y-m-d H:i:s'); // Assegna un orario di partenza casuale tra 10 e 20 giorni successivi. Il formato ('Y-m-d H:i:s') darà come output qualcosa come '2023-12-14 14:30:00', a seconda della data e dell'ora generata casualmente.
            $train->arrival_station = $faker->city;
            $train->arrival_time = $faker->dateTimeBetween('+12 days', '+22 days')->format('Y-m-d H:i:s'); // Assegna un orario di arrivo casuale tra 12 e 22 giorni successivi.
            $train->train_code = $faker->numberBetween(0, 200); // Assegna un codice treno casuale tra 0 e 200.
            $train->number_of_carriages = $faker->numberBetween(1, 10); // Limito il numero di carrozze da 1 a 10.
            $train->in_time = $faker->boolean;
            $train->deleted = $faker->boolean;
            // Salvo i dati nel database, altrimenti potrebbe darmi errore
            $train->save();
        }
    }
}
