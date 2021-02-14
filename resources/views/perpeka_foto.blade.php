@extends('master_depan')

@section('content')

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1>Album Perpeka</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach($foto as $f)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ url ('storage/'.$f->img ) }}" alt="">
            <div class="card-body">
              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

</main>

@endsection