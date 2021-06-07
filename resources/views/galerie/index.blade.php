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

  <div class="row justify-content-center">
        <!-- Trigger the Modal -->

            @foreach ($photo as $item)
                <div class="justify-content-center">
                    <img class="zoom myImg m-4" id="myImg" alt="{{$item->description}}" src="{{asset('storage/'.$item->image)}}"  width="250" height="200" style="width:100%;max-width:300px">
                </div>
            @endforeach

            <!-- The Modal -->
            <div id="myModal" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>

                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img01">

                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
            </div>
            
   </div>
   <div class="row justify-content-center mb-4">
    {{$photo->links()}}
   </div>


@endsection