@extends('layouts.back')
@include('layouts.flash')

@section('back')
    @include('partials.nav')
    <h1 class="text-center">contact</h1>
    <div class="card container text-center bg-light mb-3" style="max-width: 18rem;">
        @foreach ($contact as $contact)
        <div class="card-header">Contact</div>
        <div class="card-body">
          <p class="card-text">Location : {{$contact->location}} </p>
          <p class="card-text">Email : {{$contact->email}}</p>
          <p class="card-text"> Call : {{$contact->call}} </p>
          <button class="btn btn-primary text-center"><a class="text-white" href="{{route('contact.edit', $contact->id)}}">Modiffier</a></button>
        </div>
        @endforeach
        
      </div>
@endsection