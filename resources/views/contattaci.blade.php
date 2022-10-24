<x-overall>
    <x-navbar>
       
    </x-navbar>
    <form method="POST"action= "{{route('form')}}">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <textarea name="message" id="" cols="30" rows="10"></textarea>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<x-footer></x-footer>

</x-overall>