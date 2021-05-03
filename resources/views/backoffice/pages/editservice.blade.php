@extends('layouts.back')
@section('back')
<div class="container text-center">
    <h1>Modification des services</h1>
    <a href="{{route('back.portfolio')}}">Revenir à la page arrière</a>
    <form method="POST" action="{{route('services.update', $services->id)}}">
        @csrf
        @method('PUT')
        <label for="icon">Icon :</label><br>
        <input type="text" class="form-control @error('icon') is-invalid @enderror" name="icon" value="{{$services->icon}}" value="{{old('icon')}}"  ><br>
        @error('icon')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="titre">Titre :</label><br>
        <input type="text" name="titre" class="form-control @error('titre') is-invalid @enderror" value="{{$services->titre}}" value="{{old('titre')}}" ><br>
        @error('titre')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="texte">Texte :</label><br>
        <input type="text" name="texte" class="form-control py-5 @error('texte') is-invalid @enderror" value="{{$services->texte}}" value="{{old('texte')}}" ><br><br>
        @error('texte')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <button class="btn btn-primary" type="submit">Modifier</button>
    </form>
</div>    
@endsection