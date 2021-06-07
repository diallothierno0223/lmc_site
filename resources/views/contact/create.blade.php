@extends('layouts.app')

@section('content')
    <!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->
@if (session()->has('success'))
    <div class="alert alert-success" role="alert">
        <h3>{{session()->get('success')}}</h3>
    </div>
@endif
<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="{{route('contact.envoyer')}}" method="post">
        @csrf
        <div class="mt-3">
          <input type="text" value="{{old('name') ?? ''}}" class="form-control mb-3 @error('name') is-invalid @enderror " id="name" name="name" placeholder="Your Name">
          @error('name')
            <div class="invalid-feedback">
              <h6 class="text-danger">{{$errors->first('name')}}</h6>
            </div>
          @enderror
        </div>

        <div class="mt-3">
          <input value="{{old('mail') ?? ''}}" type="email" class="form-control mb-3 @error('mail') is-invalid @enderror" id="mail" name="mail" placeholder="votre Email">
          @error('mail')
            <div class="invalid-feedback">
              <h6 class="text-danger">{{$errors->first('mail')}}</h6>
            </div>
          @enderror
        </div>

        <div class="mt-3">
          <input type="text" value="{{old('subject') ?? ''}}" class="form-control mb-3 @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject">
          @error('subject')
            <div class="invalid-feedback">
              <h6 class="text-danger">{{$errors->first('subject')}}</h6>
            </div>
          @enderror
        </div>

        <div class="mt-3">
          <textarea name="message" id="message" class="form-control mb-3 @error('message') is-invalid @enderror" placeholder="Your Message">{{old('message') ?? ''}}</textarea>
          @error('message')
            <div class="invalid-feedback">
              <h6 class="text-danger">{{$errors->first('message')}}</h6>
            </div>
          @enderror
        </div>
          
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit recusandae voluptates doloremque veniam temporibus porro culpa ipsa, nisi soluta minima saepe laboriosam debitis nesciunt. Dolore, labore. Accusamus nulla sed cum aliquid exercitationem debitis error harum porro maxime quo iusto aliquam dicta modi earum fugiat, vel possimus commodi, deleniti et veniam, fuga ipsum praesentium. Odit unde optio nulla ipsum quae obcaecati! Quod esse natus quibusdam asperiores quam vel, tempore itaque architecto ducimus expedita</p>
        <a href="tel:+8802057843248" class="text-color h5 d-block">+880 20 5784 3248</a>
        <a href="mailto:yourmail@email.com" class="mb-5 text-color h5 d-block">yourmail@email.com</a>
        <p>71 Shelton Street<br>London WC2H 9JQ England</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
  <div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
</section>
<!-- /gmap -->

@endsection