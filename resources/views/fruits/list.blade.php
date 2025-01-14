@extends('layouts.app')

@section('content')

<div class="modal fade " tabindex="-1" id="showOneFruitModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="showOneFruitModalTitle">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="showOneFruitModalBody">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid mt-5">
    <div class="row" id="fruits-container">
        <!-- Fruits cards will be appended here by JavaScript -->
        <div class="row">
            <div class="col-12">
                <h1>Please, order fruits</h1>
            </div>
        </div>
    </div>

    <div class="row justify-content-end my-3">
        <div class="col-4 col-md-3">
            <button class="btn btn-outline-success"data-bs-toggle="modal" data-bs-target="#showOneFruitModal" id="showFruitButton">Show a Fruit</button>
        </div>
    </div>
</div>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">&copy; {{ date('Y') }} Distributed WEB Application. All rights reserved.</span>
    </div>
</footer>
<script>
    window.rememberToken = "{{ Auth::user()->remember_token }}";
</script>
@endsection
