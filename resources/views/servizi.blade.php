<x-overall>
    <x-navbar> 
    </x-navbar>
    
     <div class="hero">
      <h1>I nostri servizi</h1>
     </div>
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-12 col-md-6">
                        <x-cardPrestazione
                            nome="{{$service['nome']}}"
                            descrizione="{{$service['descrizione']}}"
                            dottore="{{$service['dottore']}}"
                            prezzo="{{$service['prezzo']}}"
                        />
                    </div>
                @endforeach
            </div>
        </div>
        <x-footer></x-footer>

</x-overall>