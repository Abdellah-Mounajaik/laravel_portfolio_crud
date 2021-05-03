@extends('layouts.back')
@section('back')
<h1 class="text-center mt-5">Ajouter une image</h1>
<form method="POST" class="text-center container " enctype="multipart/form-data" action="{{route('portfolio.store')}}">
    @csrf
    <a class="" href="{{route('back.portfolio')}}">Revenir à la page arrière</a><br>

    <label class="mt-4" for="img">Ajouter le lien d'une image :</label> <br>
    <input type="file" name="img"><br><br>
    
    <label for="filter">Ajouter filter :</label> <br>
    <div class="input-group mb-3">
        <select name="filter" class="custom-select" id="inputGroupSelect02">
          <option value="1">filter-app</option>
          <option value="2">filter-web</option>
          <option value="3">filter-card</option>
          <option value="4">Card 2</option>
          <option value="5">Web 2</option>
          <option value="6">App 3</option>
          <option value="7">Card 1</option>
          <option value="8">Card 3</option>          
        </select>    
      </div>
    <label for="title">Ajouter title :</label> <br>
    <div class="input-group mb-3">
        <select name="title" class="custom-select" id="inputGroupSelect02">
          <option value="1">App 1</option>
          <option value="2">Web 3</option>
          <option value="3">App 2</option>
          <option value="4">Card 2</option>
          <option value="5">Web 2</option>
          <option value="6">App 3</option>
          <option value="7">Card 1</option>
          <option value="8">Card 3</option>          
        </select>    
      </div>
    
    <button type="submit" class="btn btn-primary text-center">Enregistrer</button>
</form>
@endsection
