<main id="main">
<section id="about" class="about">
  @foreach ($about as $about)
  <div class="container">

    <div class="section-title">
      
      <h2>{{$about->titre}}</h2> 
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src={{$about->image}} class="img-fluid" alt="">
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3>{{$about->soustitre}}</h3>
        <p class="font-italic">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua.
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Birthday:</strong> {{$about->birthday}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Website:</strong> {{$about->website}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> {{$about->phone}} </li>
              <li><i class="icofont-rounded-right"></i> <strong>City:</strong> {{$about->city}} </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="icofont-rounded-right"></i> <strong>Age:</strong> {{$about->age}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> {{$about->degree}} </li>
              <li><i class="icofont-rounded-right"></i> <strong>PhEmailone:</strong> {{$about->PhEmailone}}</li>
              <li><i class="icofont-rounded-right"></i> <strong>Freelance:</strong> {{$about->Freelance}}</li>
            </ul>
          </div>
        </div>
        <p>
          Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
          Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
        </p>
      </div>
    </div>

  </div>    
  @endforeach
    
  </section><!-- End About Section -->