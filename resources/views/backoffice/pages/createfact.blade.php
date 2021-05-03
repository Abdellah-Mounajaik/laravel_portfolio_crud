@extends('layouts.back')

@section('back')
    <h1 class="text-center mt-5">Ajouter un fact</h1>
    <form method="POST" class="text-center container " action="{{route('fact.store')}}">
        @csrf
        <a class="" href="{{route('back.about')}}">Revenir à la page arrière</a><br>
            @csrf
            <label for="icon">icon</label>
            <input class="form-control" name="icon" type="text">
            <label for="nom">nom</label>
            <input class="form-control" name="nom" type="text">
            <label for="chiffre">chiffre</label>
            <input class="form-control" name="chiffre" type="text">
        <div class="text-center my-4">
            <button type="submit" class="btn btn-primary text-center">Enregistrer</button>            
        </div>
    </form>
@endsection