@extends('layouts.app')

@section('content')
    <h1>Treni in partenza oggi</h1>
    <!-- se il numero di treni è maggiore di zero, quindi se ci sono treni nella collezione che viene contata in trains -->
    @if(count($trains) > 0) 
        <ul>
            <!-- allora li itera, elencandoli in una lista -->
            @foreach($trains as $train) 
                <li>
                    {{ $train->train_code }} - {{ $train->departure_station }} to {{ $train->arrival_station }} at {{ $train->departure_time }} <!-- in quqesto caso visualizzo le informazioni del treno: codice del treno, stazione di partenza, stazione di arrivo e orario di partenza. -->
                </li>
            @endforeach
        </ul>
    @else
        <p>Nessun treno in partenza oggi.</p> <!-- altrimenti, mostra un messaggio che dice che non ci sono treni in partenza oggi. -->
    @endif
@endsection