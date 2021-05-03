@extends('layouts.back')

    @section('back')
    @include('layouts.flash')

    @include('partials.nav')

    <h1 class="text-center mt-3">About</h1>

        <section id="about" class="about">
          @foreach ($about as $about)
          <div class="card container mt-3 mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{asset('img/' . $about->image)}}" class="card-img mt-5" alt="...">
                {{-- <img src={{asset('img/' . $about->imag)}} class="img-fluid" alt=""> --}}

              </div>
              <div class="col-md-8">
                <div class="card-body">
                    <h3 class="card-title text-center">{{$about->titre}}</h3>                    
                    <h5 class="card-title">{{$about->soustitre}}</h5>
                    <ul>
                        <li>Birthday: {{$about->birthday}}</li>
                        <li>Website: {{$about->website}}</li>
                        <li>City: {{$about->city}}</li>
                        <li>Age: {{$about->age}}</li>
                        <li>Degree: {{$about->degree}}</li>
                        <li>PhEmailone: {{$about->PhEmailone}}</li>
                        <li>Freelance: {{$about->Freelance}} </li>
                    </ul>
                    <button class="btn btn-primary"><a class="text-white" href="{{route('about.show', $about->id)}}">Plus de détails</a></button>
                    <button class="btn btn-primary"><a class="text-white" href="{{route('about.edit', $about->id)}}">Modifier</a></button>
                </div>
              </div>
            </div>
          </div>

          @endforeach
            
        </section><!-- End About Section -->
        <h1 class="text-center">Image nav</h1>
        @foreach ($profils as $profil)
        <div class="text-center">
          <img width="15%"  src={{asset("img/" . $profil->image)}} alt="" class="img-fluid rounded-circle">

        </div>
        <div class="text-center">
          <button class="btn btn-primary mt-3"><a class="text-white" href="{{route('nav.edit', $profil->id)}}">Modifier</a></button>
        </div>    
        @endforeach
        
        <!-- ======= Facts Section ======= -->
<section id="facts" class="facts">
  <div class="container">

      <h2 class="text-center my-5">Facts</h2>
      <a href="{{route('fact.create')}}">Ajouter un fact</a>
    <div class="row no-gutters">
      @foreach ($facts as $facts)

      <div class="col-lg-3 my-5 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
        <div class="count-box">
          <i class={{$facts->icon}}></i>
          <span data-toggle="counter-up">{{$facts->chiffre}}</span>
          <p><strong>{{$facts->nom}}</strong> consequuntur quae</p>
          <button class="btn btn-primary" type="submit"><a class="text-white" href="{{route('fact.edit', $facts->id)}}">Modifier</a></button>
          <form method="POST" action="{{route('fact.delete', $facts->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger my-3">Supprimer</button>
          </form>
        </div>
      </div>

      @endforeach
      
  </div>
</section><!-- End Facts Section -->


@endsection