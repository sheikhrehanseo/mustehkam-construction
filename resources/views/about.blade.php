@extends('layout')

@section('title', 'About Us')

@section('content')

    <div class="breadcrumbs d-flex align-items-center" 
         style="background-image: url('{{ asset('assets/img/constructions-4.jpg') }}'); background-color: #333; min-height: 300px;">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>About</h2>
      </div>
    </div>
    <section id="about" class="about section">
      <div class="container">
        <div class="row position-relative">
          <div class="col-lg-7 about-img" style="background-image: url('{{ asset('assets/img/about.jpg') }}');"></div>
          <div class="col-lg-7">
            <h2>Building the Future with Excellence</h2>
            <div class="our-story">
              <h4>Est 2020</h4>
              <h3>Our Story</h3>
              <p>Mustehkam Construction started with a small team of engineers and a big dream. Today, we are one of the leading construction firms, known for quality, integrity, and innovation.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Licensed and Certified Engineers</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Top-tier Safety Standards</span></li>
                <li><i class="bi bi-check-circle"></i> <span>On-time Project Delivery</span></li>
              </ul>
              <p>We take pride in turning complex architectural designs into reality. Our portfolio includes skyscrapers, luxury villas, and sustainable commercial complexes.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="alt-services" class="alt-services section">
      <div class="container">
        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
             <img src="{{ asset('assets/img/alt-services.jpg') }}" alt="" class="img-fluid">
          </div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Why Choose Mustehkam?</h3>
            <p>We go beyond simple construction. We provide a full ecosystem of services to ensure your project succeeds.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Digital Blueprinting</a></h4>
                <p>We use the latest CAD software to visualize your project before a single brick is laid.</p>
              </div>
            </div>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Certified Materials</a></h4>
                <p>We only use materials that meet international ISO safety standards.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="stats-counter" class="stats-counter section">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-headset color-green flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="testimonials" class="testimonials section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonials</h2>
        <p>What our clients are saying about us.</p>
      </div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": { "delay": 5000 },
              "slidesPerView": "auto",
              "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true },
              "breakpoints": {
                "320": { "slidesPerView": 1, "spaceBetween": 40 },
                "1200": { "slidesPerView": 2, "spaceBetween": 20 }
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="{{ asset('assets/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>CEO &amp; Founder</h4>
                  <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                  <p><i class="bi bi-quote quote-icon-left"></i><span>Mustehkam delivered our headquarters 2 months ahead of schedule.</span><i class="bi bi-quote quote-icon-right"></i></p>
                </div>
              </div>
            </div>
            </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section>

    <section id="team" class="team section">
      <div class="container">
        <div class="section-header">
          <h2>Our Team</h2>
          <p>Meet the experts behind our success.</p>
        </div>
        <div class="row gy-5">
          @foreach($team as $member)
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="{{ asset($member->image) }}" class="img-fluid" alt="" style="width: 100%; height: 250px; object-fit: cover; object-position: center;">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>{{ $member->name }}</h4>
              <span>{{ $member->role }}</span>
              <p>{{ $member->bio }}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection