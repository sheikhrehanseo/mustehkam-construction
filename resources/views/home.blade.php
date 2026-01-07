@extends('layout')

@section('title', 'Home')

@section('content')

    <section id="hero" class="hero section dark-background">
      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-6 text-center">
              <h2>Welcome to Mustehkam</h2>
              <p>We are dedicated to building your future with integrity and excellence. From renovation to large-scale construction, we cover it all.</p>
              <a href="#get-started" class="btn-get-started">Get Started</a>
            </div>
          </div>
        </div>
      </div>

      <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-item"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-1.jpg') }}" alt=""> </div>
        <div class="carousel-item active"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-2.jpg') }}" alt=""> </div>
        <div class="carousel-item"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-3.jpg') }}" alt=""> </div>
        <div class="carousel-item"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-4.jpg') }}" alt=""> </div>
        <div class="carousel-item"> <img src="{{ asset('assets/img/hero-carousel/hero-carousel-5.jpg') }}" alt=""> </div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>
      </div>
    </section>

    <section id="get-started" class="get-started section">
      <div class="container">
        <div class="row justify-content-between gy-4">
          <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
            <div class="content">
              <h3>Building with Precision and Passion.</h3>
              <p>At Mustehkam, we believe in quality foundation. Whether it's a home renovation or a commercial skyscraper, we bring the same level of dedication to every project.</p>
            </div>
          </div>
          <div class="col-lg-5" data-aos="zoom-out" data-aos-delay="200">
            <form action="{{ route('contact.store') }}" method="post" class="php-email-form">
              @csrf {{-- Safety Token required by Laravel --}}
              
              <h3>Get a quote</h3>
              <p>Contact us today for a free consultation.</p>
              <div class="row gy-3">
                <div class="col-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>
                <div class="col-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>
                <div class="col-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>
                <input type="hidden" name="subject" value="New Quote Request from Homepage">

                <div class="col-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>
                
                <div class="col-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>
                  
                  <button type="submit">Get a quote</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="services section light-background">
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Comprehensive construction solutions for every need.</p>
      </div>
      <div class="container">
        <div class="row gy-4">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="service-item position-relative">
                    <div class="icon"><i class="fa-solid {{ $service->icon }}"></i></div>
                    <h3>{{ $service->title }}</h3>
                    <p>{{ $service->description }}</p>
                    <a href="#" class="readmore stretched-link">Read more <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>

    <section id="features" class="features section">
      <div class="container">

        <ul class="nav nav-tabs row g-2 d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1" aria-selected="true" role="tab">
              <h4>Planning</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2" aria-selected="false" tabindex="-1" role="tab">
              <h4>Design</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3" aria-selected="false" tabindex="-1" role="tab">
              <h4>Build</h4>
            </a>
          </li>
          <li class="nav-item col-3" role="presentation">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-4" aria-selected="false" tabindex="-1" role="tab">
              <h4>Finish</h4>
            </a>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

          <div class="tab-pane fade active show" id="features-tab-1" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatem dignissimos provident</h3>
                <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                  <li><i class="bi bi-check2-all"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
                  <li><i class="bi bi-check2-all"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets/img/features-1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Neque exercitationem debitis</h3>
                <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets/img/features-2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Voluptatibus commodi accusamu</h3>
                <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets/img/features-3.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                <h3>Omnis fugiat ea explicabo sunt</h3>
                 <p class="fst-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="{{ asset('assets/img/features-4.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section id="projects" class="projects section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Projects</h2>
        <p>Take a look at our recent work.</p>
      </div>

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-remodeling">Remodeling</li>
            <li data-filter=".filter-construction">Construction</li>
            <li data-filter=".filter-repairs">Repairs</li>
            <li data-filter=".filter-design">Design</li>
          </ul>

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            @foreach($projects as $project)
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $project->category }}">
              <div class="portfolio-content h-100">
                <img src="{{ asset($project->image_path) }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>{{ $project->title }}</h4>
                  <p>{{ ucfirst($project->category) }}</p>
                  <a href="{{ asset($project->image_path) }}" title="{{ $project->title }}" data-gallery="portfolio-gallery-{{ $project->category }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section id="recent-blog-posts" class="recent-blog-posts section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Recent Blog Posts</h2>
        <p>Stay updated with our latest news.</p>
      </div>
      <div class="container">
        <div class="row gy-5">
            
          @foreach($blogs as $blog)
          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
              <div class="post-img position-relative overflow-hidden">
                <img src="{{ asset($blog->image) }}" class="img-fluid" alt="">
                <span class="post-date">{{ \Carbon\Carbon::parse($blog->post_date)->format('F d') }}</span>
              </div>
              <div class="post-content d-flex flex-column">
                <h3 class="post-title">{{ $blog->title }}</h3>
                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">{{ $blog->author }}</span>
                  </div>
                  <span class="px-3 text-black-50">/</span>
                  <div class="d-flex align-items-center">
                    <i class="bi bi-folder2"></i> <span class="ps-2">{{ $blog->category }}</span>
                  </div>
                </div>
                <hr>
                <a href="#" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </section>

@endsection