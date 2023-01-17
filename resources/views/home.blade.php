@extends('layout.app')
@section('title', 'Trenitalia')
@section('main')
    <main>
        @foreach ($trains as $item)
            <h3>
                codice di serie: 
                {{ $item['serial_code']}}
            </h3>   
            <h3>
                regione: 
                {{ $item['operating_region']}}
            </h3>       
            <h3>
                data messa in servizio: 
                {{ $item['working_start_date']}}
            </h3>       
            <h3>
                ultima manutenzione: 
                {{ $item['last_mainteinance']}}
            </h3>       
            <h3>
                prossima manutenzione: 
                {{ $item['next_mainteinance']}}
            </h3>       
            <h3>
                data di ritiro: 
                {{ $item['retirement_date']}}
            </h3>       


        @endforeach
    </main>
@endsection