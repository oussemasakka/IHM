@extends('Client.Template')
@section('Content')
  <!--==============================
      Hero Area Start 
    ==============================-->
    <section class="hero-layout1">
        <div>
          <div class="vs-carousel hero-slider2" data-slide-show="1" data-fade="true">

            <div class="hero-slide hero-mask" data-bg-src="{{ asset('assets/img/bg2.png') }}">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-lg-6">
                    <div class="hero-content">
                      <span class="hero-subtitle">Let's Go Now</span>
                      <h1 class="hero-title">Riding The Tide Of Endless World</h1>
                      <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget
                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia convallis at tellus.</p>
                      <a href="about.html" class="vs-btn style4">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="hero-form2" data-bg-src="assets/img/banner/map-bg.png">
                      <div class="shape-mockup">

                      </div>
                      <div>
                        <label class="h3">Where To?</label>
                        <div class="form-group ">
                          <i class="fas fa-compass"></i>
                          <input type="text" placeholder="Where To?" />
                        </div>
                      </div>
                      <div>
                        <label class="h3">Month</label>
                        <div class="form-group ">
                          <i class="fas fa-calendar-alt"></i>
                          <select class="form-select" name="name">
                            <option value="" selected="selected" disabled="disabled" hidden="">Select Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">April</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <label class="h3">Travel Type</label>
                        <div class="form-group">
                          <i class="fas fa-thumbtack"></i>
                          <select class="form-select" name="name">
                            <option value="" selected="selected" disabled="disabled" hidden="">Select Type</option>
                            <option value="">Adventure </option>
                            <option value="">Combining</option>
                            <option value="">Sporting</option>
                            <option value="">Domestic</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <center><button class="vs-btn style4">Find Now</button></center>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hero-slide hero-mask" data-bg-src="{{ asset('assets/img/bg3.png') }}">
              <div class="container">
                <div class="row align-items-center justify-content-between">
                  <div class="col-lg-6">
                    <div class="hero-content">
                      <span class="hero-subtitle">Let's Go Now</span>
                      <h1 class="hero-title">Explore The Journey With Us</h1>
                      <p class="hero-text">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget
                        consectetur sed, convallis at tellus. Quisque velit nisi, pretium ut lacignia convallis at tellus.</p>
                      <a href="about.html" class="vs-btn style4">Read More</a>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="hero-form2" data-bg-src="assets/img/banner/map-bg.png">
                      <div class="shape-mockup">
                      </div>
                      <div>
                        <label class="h3">Where To?</label>
                        <div class="form-group ">
                          <i class="fas fa-compass"></i>
                          <input type="text" placeholder="Where To?" />
                        </div>
                      </div>
                      <div>
                        <label class="h3">Month</label>
                        <div class="form-group ">
                          <i class="fas fa-calendar-alt"></i>
                          <select class="form-select" name="name">
                            <option value="" selected="selected" disabled="disabled" hidden="">Select Month</option>
                            <option value="">January</option>
                            <option value="">February</option>
                            <option value="">March</option>
                            <option value="">April</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <label class="h3">Travel Type</label>
                        <div class="form-group">
                          <i class="fas fa-thumbtack"></i>
                          <select class="form-select" name="name">
                            <option value="" selected="selected" disabled="disabled" hidden="">Select Type</option>
                            <option value="">Adventure </option>
                            <option value="">Combining</option>
                            <option value="">Sporting</option>
                            <option value="">Domestic</option>
                          </select>
                        </div>
                      </div>
                      <div>
                        <center><button class="vs-btn style4">Find Now</button></center>                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <button class="icon-btn prev-btn" data-slick-prev=".hero-slider2"><i class="fas fa-chevron-left"></i></button>
            <button class="icon-btn next-btn" data-slick-next=".hero-slider2"><i class="fas fa-chevron-right"></i></button>
          </div>
        </div>
      </section>
      <!-- ============================
            Hero Area End 
          ==============================-->
    
      <!--==============================
        Tour Package Area Start 
      ==============================-->
      <section class="space bg-light shape-mockup-wrap" data-bg-src="assets/img/shape/Bg.png">
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="20%" data-left="5%">
          <img src="assets/img/shape/Dot.png" alt="Dots">
        </div>
        <div class="shape-mockup d-none d-xl-block spin z-index-negative" data-bottom="-5%" data-right="-5%">
          <img src="assets/img/shape/circle1.png" alt="Circle">
        </div>
        <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="10%">
          <img src="assets/img/shape/Plane.png" alt="plane">
        </div>
        <div class="container ">
          <div class="row justify-content-center text-center">
            <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
              <div class="title-area">
                <span class="sec-subtitle">Awesome Tours</span>
                <h2 class="sec-title h1">Best Holiday Package</h2>
                <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
                  consectetur sed, convgallis at tellus. Vestibulum ac diam sit.</p>
              </div>
            </div>
          </div>
          <div class="row vs-carousel" data-slide-show="4" data-arrows="false" data-lg-slide-show="3" data-md-slide-show="2"
            data-sm-slide-show="1">
            @foreach ($hotels as $hotel )
            <div class="col-xl-3 col-lg-6 col-sm-6">
              <div class="package-style1">
                <div class="package-img">
                  <a href="/client/hotels/details/{{$hotel->id}}"><img class="w-100" src="{{ asset($hotel->image) }}" alt="Package Image"></a>
                </div>
                <div class="package-content">
                  <div class="package-review">
                    @for($i = 1; $i <= 5; $i++)
                        @if($i <= $hotel->nombreEtoile)
                            <i class="fas fa-star"></i> <!-- Étoile remplie -->
                        @else
                            <i class="far fa-star"></i> <!-- Étoile vide -->
                        @endif
                    @endfor
                </div>
                
                  <h3 class="package-title"><a href="/client/hotels/details/{{$hotel->id}}">{{$hotel->NomHotel}}</a></h3>
                  <p class="package-text">{{$hotel->adress}}</p>
                  <div class="package-meta">
                    <a href="#"><i class="fas fa-calendar-alt"></i> Days: 4</a>
                    <a href="#"><i class="fas fa-user"></i> People: 3</a>
                  </div>
                  <div class="package-footer">
                    <span class="package-price">{{$hotel->prixmoyen}} DT </span>
                    <a href="/client/hotels/details/{{$hotel->id}}" class="vs-btn style4">View Details</a>
                  </div>
                </div>
              </div>
            </div>
     
     
            @endforeach
  
  
    
      
          </div>
          <div class="text-center pt-lg-2">
            <a href="/client/hotels" class="vs-btn">View More</a>
          </div>
        </div>
      </section>
      <!--==============================
        Tour Package Area End 
      ==============================-->
    
      <!--==============================
        About Area Start 
      ==============================-->
      <section class="space shape-mockup-wrap">
        <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-top="10%" data-left="5%">
          <img src="assets/img/shape/Ballon.png" alt="svg">
        </div>
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="10%" data-right="10%">
          <img src="assets/img/shape/up-arrow.png" alt="svg">
        </div>
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="0%" data-left="0%">
          <img class="plane2" src="assets/img/shape/plane2.png" alt="svg">
        </div>
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-bottom="15%" data-right="5%">
          <img src="assets/img/shape/Lines.png" alt="svg">
        </div>
        <div id="about" class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-5">
              <div class="about-content">
                <div class="title-area">
                  <span  class="sec-subtitle">We are Travolo</span>
                  <h2 class="sec-title h1">We Are The Best For Your Travel </h2>
                  <p class="sec-text">Blienum nhaedrum torquatos nec eul, vis detraxit periculis ex, nihil is in mei. Xei an
                    periculaeuripidis, fincartem ei est. Dlienum phaed is in mei. Lei an Hericulaeuripidis, hincartem ei
                    est.</p>
                </div>
                <ul class="about-list1">
                  <li>Mei an periculaeuripidis.</li>
                  <li>Lorem ipsum dolor sit am.</li>
                  <li>Blienum nhaedrum tortos.</li>
                  <li>Dlienum phaed is in meis.</li>
                  <li>torquatos nec euls vis.</li>
                  <li>peric uripidis, fincartem.</li>
                  <li>pericu laeuri pidis Mei sm.</li>
                </ul>
                <a href="/client/hotels" class="vs-btn style4 ">View More</a>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="img-box3">
                <img class="img1" src="assets/img/1.png" alt="about image">
                <div class="bottom-img">
                  <img class="img2" src="assets/img/11.png" alt="about image">
                  <img class="img3" src="assets/img/111.png" alt="about image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--==============================
        About Area End 
      ==============================-->
    
      <!--==============================
        Gallery Area Start 
      ==============================-->
      <section class="space bg-light gallery2 shape-mockup-wrap">
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="20%" data-left="0%">
          <img src="assets/img/shape/visit-left.png" alt="svg">
        </div>
        <div class="shape-mockup d-none d-xl-block jump z-index-negative" data-top="20%" data-right="0%">
          <img src="assets/img/shape/visit-right.png" alt="svg">
        </div>
        <div class="shadow-color"></div>
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="title-area">
                <span class="sec-subtitle">Go & Discover</span>
                <h2 class="sec-title h1">Breathtaking Cities</h2>
                <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
                  consectetur sed, convgallis at tellus. Vestibulum ac diam sit.</p>
              </div>
            </div>
          </div>
          <div class="gallery-style-2">
            <img src="assets/img/video.png" alt="Gallery image">
            <a href="https://www.youtube.com" class="play-btn popup-video"><i
                class="fas fa-play"></i></a>
          </div>
        </div>
      </section>
      <!--==============================
        Gallery Area End 
      ==============================-->
    
      <!--==============================
        Features Area Start 
      ==============================-->
      <section class="space-extra-bottom shape-mockup-wrap">
        <div class="shape-mockup d-none d-xl-block ripple-animation z-index-negative" data-bottom="10%" data-right="13%">
          <img src="assets/img/shape/circle.png" alt="svg">
        </div>
        <div id="services" class="container">
          <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
              <div class="features-style1">
                <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
                <div class="features-image">
                  <img src="assets/img/features/features-1-1.png" alt="image">
                </div>
                <div class="features-content">
                  <h3 class="features-title">Special Activities</h3>
                  <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit vivgbagmus Bitur
                    aliquet</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
              <div class="features-style1">
                <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
                <div class="features-image">
                  <img src="assets/img/features/features-1-2.png" alt="image">
                </div>
                <div class="features-content">
                  <h3 class="features-title">Popper Guideline</h3>
                  <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit vivgbagmus Bitur
                    aliquet</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
              <div class="features-style1">
                <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
                <div class="features-image">
                  <img src="assets/img/features/features-1-3.png" alt="image">
                </div>
                <div class="features-content">
                  <h3 class="features-title">Travel Arrangement </h3>
                  <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit vivgbagmus Bitur
                    aliquet</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 col-12">
              <div class="features-style1">
                <div class="features-bg" data-bg-src="assets/img/shape/features.png"></div>
                <div class="features-image">
                  <img src="assets/img/features/features-1-4.png" alt="image">
                </div>
                <div class="features-content">
                  <h3 class="features-title">Location Manager</h3>
                  <p class="features-text">Curabitur aliquet qugbfam isfbd dgui posuedfdre bladscfndit vivgbagmus Bitur
                    aliquet</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--==============================
        Features Area End 
      ==============================-->
    
      <!--==============================
         Special Offer Area Start 
      ==============================-->
      <section class="space position-relative" data-bg-src="assets/img/bg/offer-bg.jpg">
        <div class="container">
          <div class="row align-items-center justify-content-between ">
            <div class="col-xl-5 col-lg-6 col-md-6">
              <div class="title-area white-title">
                <span class="sec-subtitle">Go & Discover</span>
                <h2 class="sec-title h1">Get Special Offer</h2>
                <p class="sec-text">Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget
                  consectetur sed, convgallis at tellus.</p>
                <div class="pt-lg-3">
                  <a href="contact.html" class="vs-btn style2">View More</a>
                </div>
              </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-md-6">
              <div class="img-box2">
                <span class="spinner-style1"></span>
                <div class="img1">
                  <img src="assets/img/shape/offer-1-1.png " alt="Offer image">
                </div>
              </div>
              <div class="img-1-2">
                <img src="assets/img/shape/bag.png" alt="image">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--==============================
         Special Offer Area End 
      ==============================-->
    
  


@endsection