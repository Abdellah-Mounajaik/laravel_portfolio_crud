@extends('layouts.back')
@section('back')
<div class="container text-center">
    <h1>Modification des Skills</h1>
    <a href="{{route('back.about')}}">Revenir à la page arrière</a>
    <form method="POST" action="{{route('fact.update', $facts->id)}}">
        @csrf
        @method('PUT')
        <label for="icon">icon :</label><br>
        <input type="text" name="icon" value="{{$facts->icon}}" ><br>
        <label for="nom ">nom:</label><br>
        <input type="text" name="nom" value="{{$facts->nom}}"><br>
        <label for="chiffre">chiffre :</label><br>
        <input type="text" name="chiffre" value="{{$facts->chiffre}}"  ><br><br>
        <button type="submit">Enregistrer</button>
    </form>
</div>    
@endsection