<x-overall>
    <x-navbar> 
    </x-navbar>
    
     <div class="hero-servizi">
      <h1>Dai un'occhiata ai nostri <span> servizi </span></h1>
     </div>

     <div class="service-title">
        <h2>Lorem, ipsum dolor sit amet consectetur</h2>
     </div>

        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-12 col-md-4">
                        <x-cardPrestazione
                            img="{{$service['img']}}"
                            nome="{{$service['nome']}}"
                            descrizione="{{$service['descrizione']}}"
                            dottore="{{$service['dottore']}}"
                            prezzo="{{$service['prezzo']}}"
                        />
                    </div>
                @endforeach
            </div>
        </div>
</x-overall>