<x-overall>
    <x-navbar>
       
    </x-navbar>

    <div class="contattaci-container d-flex">

      <div class="contattaci-hero">
        <h1 class="contattaci-title">Ti risponderemo prima di subito</h1>
      </div>


      <div class="form-container">

          <div class="form-contattaci">
            <form method="POST"action= "{{route('form')}}">
              @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nome e Cognome</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="text-area">
                  <label for="exampleInputEmail1" class="form-label">Messaggio</label>
                  <textarea name="message" id="" cols="30" rows="10"></textarea>
                  <button type="submit" class="btn btn-primary btn-form">Submit</button>
                </div>

            </form>
          </div>

        
      </div>

    </div>




</x-overall>