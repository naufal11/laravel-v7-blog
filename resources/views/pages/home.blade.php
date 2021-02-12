@extends('layouts.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            {{-- <img src="{{ asset('storage/background-example.jpg') }}" class="d-block w-100 overflow-hidden" alt="..."> --}}
            <div style="height: 200px; background-color: #adb5bd;">
                <div class="w-100 h-100"></div>
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h3>Wonderful Journey</h3>
                <p>Blog of Indonesia Tourism</p>
            </div>
        </div>
    </div>
</div>

<div class="container pt-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col pb-3">
          <div class="card h-100">
            <img src="{{ asset('storage/background-example.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="col pb-3">
          <div class="card h-100">
            <img src="{{ asset('storage/background-example.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a short card.</p>
            </div>
          </div>
        </div>
        <div class="col pb-3">
          <div class="card h-100">
            <img src="{{ asset('storage/background-example.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
          </div>
        </div>
        <div class="col pb-3">
          <div class="card h-100">
            <img src="{{ asset('storage/background-example.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection
