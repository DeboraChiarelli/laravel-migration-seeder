<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $today = date('Y-m-d'); // Indica la data corrente nel formato YYYY-MM-DD
        $trains = Train::where('departure_time', '>=', $today . ' 00:00:00')->get(); // Il modello ::where serve a creare una query che filtra i record della tabella trains in base a una condizione. 
                                                                                    // In questo caso, la condizione è che l'orario di partenza (departure_time) sia maggiore o uguale alla data corrente ($today).
                                                                                    // Train:: Si riferisce al modello Train.
                                                                                    // departure_time è il nome della colonna del database a cui applicare la condizione.
                                                                                    // >= è l'operatore di confronto.
                                                                                    //where('departure_time', '>=', $today): Specifica la condizione della query, ossia se l'orario di partenza è maggiore o uguale alla data corrente.
                                                                                    //->get(): Esegue effettivamente la query, restituendo degli oggetti Train che soddisfano la condizione.
                                                                                    // Questi oggetti rappresentano le righe della tabella trains che rispettano la condizione specificata nella query.

        return view('train.index', compact('trains'));
    }
}