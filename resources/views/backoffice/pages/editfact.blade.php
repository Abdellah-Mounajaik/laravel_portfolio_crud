@extends('layouts.back')
@section('back')
<div class="container text-center">
    <h1>Modification fact</h1>
    <a href="{{route('back.about')}}">Revenir à la page arrière</a>
    <form class="container" method="POST" action="{{route('fact.update', $facts->id)}}">
        @csrf
        @method('PUT')
        <label for="icon">icon :</label><br>
        <input class="form-control" class="@error('icon') is-invalid @enderror" type="text" name="icon" value="{{$facts->icon}}" value="{{old('icon')}}" ><br>
        @error('icon')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="nom ">nom:</label><br>
        <input class="form-control" class="@error('nom') is-invalid @enderror" type="text" name="nom" value="{{$facts->nom}}" value="{{old('nom')}}" ><br>
        @error('nom')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="chiffre">chiffre :</label><br>
        <input class="form-control" class="@error('chiffre') is-invalid @enderror" type="text" name="chiffre" value="{{$facts->chiffre}}" value="{{old('vhiffre')}}" ><br><br>
        @error('chiffre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-primary" type="submit">Enregistrer</button>
    </form>
</div>    
@endsection