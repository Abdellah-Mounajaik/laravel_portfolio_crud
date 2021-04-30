@extends('layouts.back')
@section('back')
    <h1 class="text-center mt-5">Modifier le contact</h1>
    <form class="text-center" method="POST" action="{{route('contact.update', $contact->id)}}">
        <a href="{{route('back.contact')}}">Revenir à la page arrière</a><br>
        @csrf
        @method('PUT')
        <label for="location">Location</label> <br>
        <input type="text" name="location"  class="@error('location') is-invalid @enderror" value="{{$contact->location}}" value="{{old('location')}}"><br><br>
        @error('location')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="email">Email</label><br>
        <input type="text" name="email"  class="@error('email') is-invalid @enderror" value="{{$contact->email}}"  value="{{old('email')}}"> <br><br>
        @error('email')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="call">Call</label><br>
        <input type="text" name="call"  class="@error('call') is-invalid @enderror" value="{{$contact->call}}" value="{{old('call')}}"><br><br>
        @error('call')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-primary ">Enregistrer</button>
    </form>
@endsection