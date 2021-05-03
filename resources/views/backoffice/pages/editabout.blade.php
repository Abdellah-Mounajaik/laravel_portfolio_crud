@extends('layouts.back')
@section('back')
    <h1 class="text-center my-3">Modifier le profil</h1>
    <form class="container" enctype="multipart/form-data" method="POST" action="{{route('about.update', $about->id)}}">
        @csrf
        @method('PUT')
        <label class="mt-4" for="img">Ajouter une image :</label> <br>
        <input type="file" name="img"><br><br>
        <label for="birthday"> Birthday :</label><br>
        <input type="text" name="birthday" class="@error('birthday') is-invalid @enderror form-control" value="{{$about->birthday}}" value="{{old('birthday')}}"><br>
        @error('birthday')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="website">Website :</label><br>
        <input type="text" name="website" class="@error('website') is-invalid @enderror form-control" value="{{$about->website}}" value="{{old('website')}}"><br>
        @error('website')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="phone">Phone :</label><br>
        <input type="text" name="phone" class="@error('phone') is-invalid @enderror form-control" value="{{$about->phone}}" value="{{old('phone')}}"><br>
        @error('phone')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="city">City :</label><br>
        <input type="text" name="city" class="@error('city') is-invalid @enderror form-control" value="{{$about->city}}" value="{{old('city')}}"><br>
        @error('city')
            <span class="invalid-feedback">
                <strong>{{$message}}</strong>
            </span>
        @enderror
        <label for="age">Age :</label><br>
        <input type="text" name="age" class="@error('age') is-invalid @enderror form-control" value="{{$about->age}}" value="{{old('age')}}"><br>
        @error('age')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
         @enderror
        <label for="degree">Degree :</label><br>
        <input type="text" name="degree" class="@error('degree') is-invalid @enderror form-control" value="{{$about->degree}}"  value="{{old('degree')}}"><br>
        @error('degree')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
         @enderror
        <label for="PhEmailone">PhEmailone :</label><br>
        <input type="text" name="PhEmailone" class="@error('PhEmailone') is-invalid @enderror form-control" value="{{$about->PhEmailone}}" value="{{old('PhEmailone')}}"><br>
        @error('PhEmailone')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
         @enderror
        <label for="Freelance">Freelance :</label><br>
        <input type="text" name="Freelance"  class="@error('Freelance') is-invalid @enderror form-control" value="{{$about->Freelance}}"  value="{{old('Freelance')}}"><br><br>
        @error('Freelance')
        <span class="invalid-feedback">
            <strong>{{$message}}</strong>
        </span>
         @enderror
         <div class="text-center my-3">
            <button class="btn btn-primary">Modifier</button>
         </div>
    </form>
@endsection