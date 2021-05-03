@extends('layouts.back')

@section('back')
    <h1 class="text-center my-4">Rajout d'un service</h1>
    <form class="container text-center" action="{{route('services.store')}}" method="post" class="container">
        <a  href="{{route('back.portfolio')}}">Revenir en arrière</a><br><br>
        @csrf
        <label class="text-center" for="icon">Icon</label>
        <input class="form-control" name="icon" type="text">
        <label class="text-center" for="titre">Titre</label>
        <input class="form-control" name="titre" type="text">
        <label class="text-center" for="texte">Texte</label>
        <input class="form-control p-5" name="texte" type="text">
        <div class="text-center my-4">
            <button class="btn btn-primary text-center">Enregistrer</button>
        </div>
    </form>
@endsection