@extends('layouts.back')
@section('back')
<h1 class="text-center mt-5">Ajouter une image</h1>
<form method="POST" class="text-center container" action="{{route('portfolio.store')}}">
    @csrf
    <a class="" href="{{route('back.portfolio')}}">Revenir à la page arrière</a><br>

    <label for="image">Ajouter le lien d'une image :</label> <br>
    <input type="text" class="form-control" name="image"><br><br>
    <button type="submit" class="btn btn-primary text-center">Enregistrer</button>
</form>
@endsection
