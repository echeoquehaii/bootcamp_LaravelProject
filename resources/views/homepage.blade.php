<x-overall>
<x-navbar> 
</x-navbar>
@if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
@endif
 <div class="hero">
  <h1>Guarda che è importante!</h1>
 </div>



  

</x-overall>