@extends('layouts.index')
@section('content')
@include('layouts.flash')

@include('partials.nav')

<section id="skills" class="skills section-bg">
  <div class="container">
    <div class="section-title">
      <h2>Skills</h2>
      <a href="{{route('skills.create')}}">Ajout d'un Skill</a>
    </div>
    <div class="row skills-content">
      @foreach ($skills as $skills)
      <div class="col-lg-6" data-aos="fade-up">
        <div class="progress">
          <span class="skill">{{$skills->competence}} <i class="val">{{$skills->niveau}}%</i></span>
          <div class="progress-bar-wrap">
            <div class="progress-bar" role="progressbar" aria-valuenow="{{$skills->niveau}}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <button class="btn btn-primary text-center"><a class="text-white" href="{{route('skills.edit', $skills->id)}}">Modifier</a></button>
        <form method="POST" action="{{route('skills.delete', $skills->id)}}">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger mt-3">Supprimer</button>
        </form>
      </div>
      @endforeach
    </div>

  </div>
  </section><!-- End Skills Section -->
