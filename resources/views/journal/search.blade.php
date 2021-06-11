@extends('layouts.app')

@section('content')
    
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our Blog</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->


  <!-- blogs -->
<section class="section">
    <div class="container">
        <div class="row justify-content-between mb-4 ">
            <div class="">
                <p><strong>{{count($journals)}}</strong> resultat pour <strong>"{{request('search')}}"</strong></p>
            </div>
            <div class="">
              <form action="{{route('journal.search')}}" method="get" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2 " type="text"  name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </div>
      <div class="row justify-content-center">

        @foreach ($journals as $journal)
            <!-- blog post -->
                <article class="col-lg-4 col-sm-6 mb-5">
                    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
                    <img class="card-img-top rounded-0" src="{{asset('storage/'.$journal->image)}}" alt="Post thumb">
                    <div class="card-body">
                        <!-- post meta -->
                        <ul class="list-inline mb-3">
                        <!-- post date -->
                        <li class="list-inline-item mr-3 ml-0">{{Carbon\Carbon::parse($journal->created_at)->format('d/m/y')}}</li>
                        <!-- author -->
                        <li class="list-inline-item mr-3 ml-0">par {{$journal->auteur}}</li>
                        </ul>
                        <a href="{{route('journal.detail', [ 'id' => $journal->id])}}">
                        <h4 class="card-title">{{$journal->title}}</h4>
                        </a>
                        <p class="card-text">{{$journal->subtitle}}</p>
                        <a href="{{route('journal.detail', [ 'id' => $journal->id])}}" class="btn btn-primary btn-sm">continuer a lire</a>
                    </div>
                    </div>
                </article>
          <!-- blog post -->
        @endforeach
        {{-- {{ $journals->links() }} --}}
      </div>
    </div>
  </section>
  <!-- /blogs -->

@endsection