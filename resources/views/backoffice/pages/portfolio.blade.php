@extends('layouts.back')
@include('layouts.flash')
@section('back')
    @include('partials.nav')
    <h1 class="text-center">Portfolio</h1>
    <div class="container">
        <div class="text-center my-5">
        <button class="btn btn-primary text-center"><a class="text-white" href="{{route("portfolio.create")}}">Ajouter une image</a></button>
        
        </div>
    <div class="row text-center mb-3" data-aos="fade-up" data-aos-delay="100">
        @foreach ($portfolios as $portfolios)
        <div class="col-4 py-3">
          <div class="portfolio-wrap">
            <img src={{asset($portfolios->img)}} class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href= {{asset($portfolios->img)}} data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
            <form method="POST" action="{{route('portfolio.delete', $portfolios->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary text-center mt-4"><a class="text-white" href="{{route("portfolio.show", $portfolios->id)}}">Plus de détails</a></button> 
                <button class="btn btn-danger text-center mt-4">Supprimer</button> 
            </form>
        </div>
        </div>
        @endforeach
        @foreach ($ports as $ports)
        <div class="col-4 y-3">
          <div class="portfolio-wrap">
            <img src={{asset($ports->image)}} class="img-fluid" alt="">
            <div class="portfolio-links">
              <a href= {{asset($ports->image)}} data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
            <form method="POST" action="{{route('portfolio.deletee', $ports->id)}}">
                @csrf
                @method('DELETE')
                <button class="btn btn-primary text-center mt-4"><a class="text-white" href="{{route('portfolio.showw', $ports->id)}}">Plus de détails</a></button> 
                <button class="btn btn-danger text-center mt-4">Supprimer</button> 
            </form>
          </div>
        </div>
        @endforeach
    </div>
    </div>

    <h1 class="text-center my-4">Services</h1>
    <div class="container my-4">
       <div class="row">
        @foreach ($services as $services)
            <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
              <div class="icon"><i class=" size-20 {{$services->icon}}"></i></div>
              <h4 class="title"><a href="">{{$services->titre}}</a></h4>
              <p class="description">{{$services->texte}}</p>
              <button class="btn btn-primary"><a class="text-white" href="{{route('services.edit', $services->id)}}">Modiffier</a></button>

            </div>
       @endforeach
    </div>

@endsection