<x-overall>
    <x-navbar></x-navbar>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="hero">
        <h1>OCCHIALI</h1>
    </div>

    <x-footer></x-footer>
</x-overall>