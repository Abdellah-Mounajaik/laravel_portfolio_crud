@extends('layouts.back')

@section('back')
    <h1 class="text-center my-3">Rajout de Skills</h1>
    <form action="{{route('skills.store')}}" method="post" class="container">
        <a  href="{{route('back.skills')}}">Revenir en arrière</a><br><br>
        @csrf
        <label for="competence">Compétence</label>
        <input class="form-control" name="competence" type="text">
        <label for="niveau">Niveau</label>
        <input class="form-control" name="niveau" type="text">
        <div class="text-center my-4">
            <button class="btn btn-primary text-center">Enregistrer</button>
        </div>
    </form>
@endsection