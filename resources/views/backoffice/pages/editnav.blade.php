
@extends('layouts.back')

@section('back')
    <h1 class="text-center">Modifier l'image</h1>
    <form class="text-center my-5" method="POST" enctype="multipart/form-data" action="{{route('nav.update', $profil->id)}}">
        @csrf
        @method('PUT')
        <a href="{{route('back.about')}}">Revenir en arrière</a> <br><br>
        <label for="image">Modifier l'image</label>
        <input name="image" type="file"><br><br>
        <button class="btn btn-primary">Enregistrer</button>    
    </form>    
@endsection