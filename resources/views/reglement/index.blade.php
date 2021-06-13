@extends('layouts.app')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Notice</a></li>
            <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
          </ul>
          <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
        </div>
      </div>
    </div>
</section>
<!-- /page title -->



<!-- notice -->
<section class="section">
    <div class="container">
        <div class="row mb-4 justify-content-between">
            <div class=""></div>
            <div class="">
              <form action="{{route('reglement.search')}}" method="get" class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </div>
      <div class="row">
        <div class="col-12">
          <ul class="list-unstyled">
            <!-- notice item -->
            @foreach ($reglement as $item)
                <li class="d-md-table mb-4 w-100 border-bottom hover-shadow">
                    <div class="d-md-table-cell text-center p-4 bg-primary text-white mb-4 mb-md-0"><span class="h3 d-block">Article </span> <span class="h5">{{$item->id}}</span> </div>
                        <div class="d-md-table-cell px-4 vertical-align-middle mb-4 mb-md-0">
                        <a  class="h4 mb-3 d-block"> {{$item->title}} </a>
                        <p class="mb-0"> {{$item->content}} </p>
                        </div>
                    {{-- <div class="d-md-table-cell text-right pr-0 pr-md-4"><a href="notice-single.html" class="btn btn-primary">read more</a></div> --}}
                </li>
            @endforeach
            <!-- notice item -->
          </ul>
        </div>
      </div>
      <div class="row justify-content-center">
          {{$reglement->links()}}
      </div>
    </div>
  </section>
  <!-- /notice -->

@endsection