<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Portfolio</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        @foreach ($portfolios as $portfolios)
        <div class="col-lg-4 col-md-6 portfolio-item {{$portfolios->filter}}">
          <div class="portfolio-wrap">

            {{-- <img src={{asset($portfolios->img)}} class="img-fluid" alt=""> --}}
            <img src={{asset('img/portfolio/' . $portfolios->img)}} class="img-fluid" alt="">

            <div class="portfolio-links">
              <a href= {{asset('img/portfolio/' . $portfolios->img)}} data-gall="portfolioGallery" class="venobox" title=" {{$portfolios->title}}"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
        @endforeach
        

      </div>

    </div>
  </section><!-- End Portfolio Section -->
