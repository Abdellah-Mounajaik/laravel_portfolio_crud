@extends('layouts.back')
@section('back')
    <h1 class="text-center mt-4">Image détaillés</h1>
    <div class="text-center mt-3">
        <img src={{asset($ports->image)}} class="img-fluid" alt="">  
    </div>
    <div class="text-center my-3">
        <button class="btn btn-primary" type="submit"><a class="text-white" href="{{route('back.portfolio')}}">Revenir en arrière</a></button>
    </div>
@endsection