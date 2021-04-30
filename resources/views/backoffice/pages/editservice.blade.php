@extends('layouts.back')
@section('back')
<div class="container text-center">
    <h1>Modification des services</h1>
    <a href="{{route('back.portfolio')}}">Revenir à la page arrière</a>
    <form method="POST" action="{{route('services.update', $services->id)}}">
        @csrf
        @method('PUT')
        <label for="icon">Icon :</label><br>
        <input type="text" name="icon"  ><br>
        <label for="titre">Titre :</label><br>
        <input type="text" name="titre"  ><br>
        <label for="texte">Texte :</label><br>
        <input type="text" name="texte"  ><br><br>
        <button type="submit">Modifier</button>
    </form>
</div>    
@endsection