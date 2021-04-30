@extends('layouts.back')
@section('back')
<div class="container text-center">
    <h1>Modification des Skills</h1>
    <a href="{{route('back.skills')}}">Revenir à la page arrière</a>
    <form method="POST" action="{{route('skills.update', $skills->id)}}">
        @csrf
        @method('PUT')
        <label for="competence">competence :</label><br>
        <input type="text" name="competence" class="@error('competence') is-invalid @enderror" value="{{$skills->competence}}" value="{{old('competence')}}" ><br>
        @error('competence')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="niveau">niveau :</label><br>
        <input type="text" name="niveau" class="@error('niveau') is-invalid @enderror" value="{{$skills->niveau}}" value="{{old('niveau')}}"><br>
        @error('niveau')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        
        <button class="btn btn-primary">Modifier</button>
    </form>
</div>    
@endsection