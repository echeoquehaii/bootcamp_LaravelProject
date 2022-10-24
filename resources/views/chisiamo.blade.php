<x-overall>
    <x-navbar></x-navbar>
    <!-- Footer -->
    <footer class="bg-dark text-center text-white">
        <div class="container-fluid p-4">
            <h3 class="mb-4">
            La nostra squadra fortissima:
            </h3>
            <div class="row">
                @foreach ($developers as $developer)
                <div class="us-card col-lg-3 col-md-6 col-12 mb-4">
                <x-usCard
                nome="{{$developer['name']}}"
                cognome="{{$developer['surname']}}"
                ruolo="{{$developer['position']}}"
                foto="{{$developer['img']}}"/>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Copyright -->
        <div class="text-center p-3 foot-end">
            <span> © 2020 Copyright:</span>
            <a class="text-white" href="https://aulab.es/">RidateciMatteo.com</a>
        </div>
    </footer>
    <!-- Footer END -->
</x-overall>