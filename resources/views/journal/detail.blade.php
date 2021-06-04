@extends('layouts.app')


@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="blog.html">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Blog Details</li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

    
<!-- blog details -->
<section class="section-sm bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-12 mb-4">
          <img src="{{asset('storage/'.$journal->image)}}" alt="blog-thumb" class="img-fluid w-100">
        </div>
        <div class="col-12">
          <ul class="list-inline">
            <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>{{$journal->auteur}}</li>
            <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">{{Carbon\Carbon::parse($journal->created_at)->format('d/m/y')}}</li>
            <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
            <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
            <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="#"><i class="ti-comments mr-2"></i>265</a></li>
          </ul>
        </div>
        <!-- border -->
        <div class="col-12 mt-4">
          <div class="border-bottom border-primary"></div>
        </div>
        <!-- blog contect -->
        <div class="col-12 mb-5">
          <h2>{{ $journal->title}}</h2>
          {!! $journal->article !!}
        </div>
        <!-- comment box -->
        <div class="col-12">
          <form action="{{ route('journal.comment') }}" method="post" class="row">
          @method('POST')
          @csrf
            <div class="col-sm-6">
              <input type="text" class="form-control mb-4" id="name" name="nom" placeholder="Full Name">
            </div>
            <div class="col-sm-6">
              <input type="email" class="form-control mb-4" id="mail" name="mail" placeholder="Email Address">
            </div>
            <div class="col-12">
              <textarea name="commentaire" id="comment" class="form-control mb-4" placeholder="Comment Here..."></textarea>
            </div>
            <input type="hidden" value="{{$journal->id}}" name="id_article"/>
            <div class="col-12">
              <button type="submit" value="send" class="btn btn-primary">post comment</button>
            </div>
          </form>
        </div>
      </div>
        <hr>
        <aside class=" card col-md-12 mt-3 blog-sidebar">
            <h2>Commentaire</h2>
            @foreach ($commentaire as $item)
                {{-- @if ($item->id_article == $journal->id) --}}
                    <div class="p-2 mb-2 bg-light rounded">
                    <h5 class="font-italic">{{$item->nom}}</h5>
                    <p class="mb-0"> {{$item->commentaire}} </p>
                    <p class="text-muted">{{Carbon\Carbon::parse($item->created_at)->format('d/m/y')}}</p>
                    </div>
                {{-- @endif --}}
            @endforeach
        </aside><!-- /.blog-sidebar -->
    </div>
            
  </section>
  <!-- /blog details -->

  
@endsection